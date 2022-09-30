<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;




use App\Cart;
use App\Product;
use App\Models\Player;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Stripe\Stripe;


class PlayerController extends Controller

{
    /**
     * PYuhala:
     * Query the players table and get all category of players.
     * The results will be sent to the players view for 
     */
    public function getIndex()
    {
        $all_players = DB::table('players')->get();

        $goalies = DB::table('players')->where('position', "=", 'goalie')->get();
        $defenders = DB::table('players')->where('position', "=", 'defense')->get();
        $midfielders = DB::table('players')->where('position', "=", 'middle')->get();
        $attackers = DB::table('players')->where('position', "=", 'attack')->get();

        $data = array('goalies' => $goalies, 'defenders' => $defenders, 'midfielders' => $midfielders, 'attackers' => $attackers);
        return view('players')->with($data);
    }


    /**
     * PYuhala:
     * This function updates the number of chosen players in each category
     */
    public function updateChosenPlayers(Request $request)
    
    {

        return 'Updating chosen players';
        $checkedGoalies = count($request->get('idsGoalies'));
        $checkedDefenders = count($request->get('idsDefenders'));
        $checkedMids = $request->idsMids;

        $checkAttackers = $request->idsAttackers;

        $choices = array('checkedGoalies' => $checkedGoalies, 'checkedDefenders' => $checkedDefenders);

        return redirect('players')->with($choices);
    }


    /**
     * PYuhala:
     * Returns the votes view with each player's votes in the different categories.
     */
    public function getResults()
    {
        return view('votes');
    }



    public function getMarket()
    {
        $products = Product::all();
        return view('shop.market', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {

        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('shop.market');
    }


    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


    public function getCard()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = Session::get('cart');
        $total = $cart->totalPrice;
        return view('shop.card-checkout', ['total' => $total]);
    }
    public function getOrder()
    {
        $cart = Session::get('cart');
        $total = $cart->totalPrice;
        $order = new Order([
            'user_id' => Auth::user()->id,
            'price' => $total
        ]);
        $order->save();
        //Session::set('cart')->null;
        $orders = Order::all();
        return view('profile', ['orders' => $orders]);
    }
    public function getReturnOrder()
    {
    }



    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_9oWd3hebqv6rO3Y2Q5YYUsIG');
    }

    public function getInvoice()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.invoice', ['total' => $total, 'products' => $cart->items]);
    }

    public function getAbout()
    {
        return view('shop.about');
    }
}
