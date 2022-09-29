<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Session;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function getPaypal(){

    }

    public function getPdf(){


    }
    public function getPayment(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.payment',['total'=>$total,'products'=>$cart->items]);
    }


    public function getSummary(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $total=$cart->totalPrice;
        return view('shop.summary',['total'=>$total,'products'=>$cart->items]);
    }
}
