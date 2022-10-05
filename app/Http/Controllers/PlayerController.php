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

        // Get all players from the db in their corresponding categories and shuffle

        $goalies = DB::table('players')->where('position', "=", 'goalie')->get()->shuffle();
        $defenders = DB::table('players')->where('position', "=", 'defense')->get()->shuffle();
        $midfielders = DB::table('players')->where('position', "=", 'middle')->get()->shuffle();
        $attackers = DB::table('players')->where('position', "=", 'attack')->get()->shuffle();

        // Shuffle 

        $data = array('goalies' => $goalies, 'defenders' => $defenders, 'midfielders' => $midfielders, 'attackers' => $attackers);
        return view('players')->with($data);
       
    }


    public function voteTest(){

        return redirect()->route('results');
    }


    /**
     * PYuhala:
     * Gets the votes inputed by the user
     * 
     */
    public function getVotes(Request $request)

    {
  

        $checkedGoalies = $request->input('idsGoalies');
        $checkedDefenders = $request->input('idsDefenders');
        $checkedMids = $request->input('idsMids');
        $checkedAttackers = $request->input('idsAttackers');

        

        //$data = array('goalies' => $checkedGoalies, 'defenders' => $checkedDefenders, 'midfielders' => $checkedMids, 'attackers' => $checkedAttackers);

        //return $data;  
               
        return redirect('results')->with(['goalies' => $checkedGoalies, 'defenders' => $checkedDefenders, 'midfielders' => $checkedMids, 'attackers' => $checkedAttackers]);
    }


    /**
     * PYuhala:
     * Process the received votes and show updated votes of the chosen 26.
     */
    public function getResults()
    {
        // Get IDs of checked players
        
        $gls = session()->get('goalies');
        $defs = session()->get('defenders');
        $mids = session()->get('midfielders');
        $atks = session()->get('attackers');

        //$email = session()->get('useremail');

       /**
        * Get user email in the session and test if they exist already in the db. 
        * For simplicity, we just want to avoid people voting too many times. 
        * So we require a valid email. No email verification is done though.
        */
        // DB::table('users')->insert([
        //     'name' => $email, 
        //     'email' => $email, 
        //     'password' => $email           
        // ]);

        /**
         * Null test: prevents any weird PHP errors on screen, 
         * just redirect to the voting page.
         */
        if(is_null($gls) or is_null($defs) or is_null($mids) or is_null($atks)){
            return redirect('/');
        }

        // Convert array of string IDs to array of int ids
        $gArray = array_map('intval',$gls);
        $dArray = array_map('intval',$defs);
        $mArray = array_map('intval',$mids);
        $aArray = array_map('intval',$atks);

        // Update each chosen player's num votes in the DB
        DB::table('players')->whereIn('id', $gArray)->increment('numVotes');
        DB::table('players')->whereIn('id', $dArray)->increment('numVotes');
        DB::table('players')->whereIn('id', $mArray)->increment('numVotes');
        DB::table('players')->whereIn('id', $aArray)->increment('numVotes');

        
        // Get total votes for each category
        $gt = DB::table('players')->where('position', "=", 'goalie')->sum('numVotes');
        $dt = DB::table('players')->where('position', "=", 'defense')->sum('numVotes');
        $mt = DB::table('players')->where('position', "=", 'middle')->sum('numVotes');
        $at = DB::table('players')->where('position', "=", 'attack')->sum('numVotes');

        $sumVotes = $gt + $dt + $mt +$at;
        // number of actual user votes (NB: each vote contains 26 choices)
        $totalVotes = $sumVotes/26;
       
        /**
         * PYuhala: 
         * Update each player's vote percent for his category in the DB
         * There's probably a shorter way to do the below query but I'm 
         * no expert in Eloquent queries; Nonetheless I'm sure this one does 
         * the job :)
         */
        // ---------------------- Update all goal keeper percentages ------------
        $gg = DB::table('players')->where('position', "=", 'goalie')->get();
        foreach($gg->toArray() as $g){
            $gtp = ($g->numVotes) * 100 * 4;
            $gPercent = ($gtp)/$gt;
            $gPlayer = Player::find($g->id);
            $gPlayer->votePercent = $gPercent;
            $gPlayer->save();
            //DB::table('players')->where('id',"=", $g->id)->update(['votePercent' => $gPercent]);
            //echo "{$g->playerName}, votes: ,{$g->numVotes}, vote percent: {$gPercent}";
        }

        // ---------------------- Update all defender percentages ------------
        $dd = DB::table('players')->where('position', "=", 'defense')->get();
        foreach($dd->toArray() as $d){
            //$newPercent = 100 * (($d->numVotes)/$dt);
            $dtp = ($d->numVotes) * 100 * 9;
            $dPercent = $dtp/$dt;
            $defPlayer = Player::find($d->id);
            $defPlayer->votePercent = $dPercent;
            $defPlayer->save();
            //DB::table('players')->where('id',"=", $d->id)->update(['votePercent' => $dPercent]);
        }

        // ---------------------- Update all midfielder percentages ------------
        $mm = DB::table('players')->where('position', "=", 'middle')->get();
        foreach($mm->toArray() as $m){
            //$newPercent = 100 * (($m->numVotes)/$mt);
            $mtp = ($m->numVotes) * 100 * 6;
            $mPercent = $mtp/$mt;
            $midPlayer = Player::find($m->id);
            $midPlayer->votePercent = $mPercent;
            $midPlayer->save();
            //DB::table('players')->where('id',"=", $m->id)->update(['votePercent' => $mPercent]);
            //echo "{$m->playerName}, votes: ,{$m->numVotes}, vote percent: {$mPercent}";
        }

        // ---------------------- Update all attacker percentages ------------
        $aa = DB::table('players')->where('position', "=", 'attack')->get();
        foreach($aa->toArray() as $a){
            //$newPercent = 100 * (($a->numVotes)/$at);
            $atp = ($a->numVotes) * 100 * 7;
            $aPercent = $atp/$at;
            $attPlayer = Player::find($a->id);
            $attPlayer->votePercent = $aPercent;
            $attPlayer->save();
            //DB::table('players')->where('id',"=", $a->id)->update(['votePercent' => $aPercent]);
        }
        


        // Get the chosen players from each category based on votes
        $goalies = DB::table('players')->where('position', "=", 'goalie')->orderBy('votePercent','desc')->limit(4)->get();
        $defenders = DB::table('players')->where('position', "=", 'defense')->orderBy('votePercent','desc')->limit(9)->get();
        $midfielders = DB::table('players')->where('position', "=", 'middle')->orderBy('votePercent','desc')->limit(6)->get();
        $attackers = DB::table('players')->where('position', "=", 'attack')->orderBy('votePercent','desc')->limit(7)->get();


        // Send results to votes view      

        $data = array('goalies' => $goalies, 'defenders' => $defenders, 'midfielders' => $midfielders, 'attackers' => $attackers, 'totalVotes' => $totalVotes);       
        return view('votes')->with($data);
       
    }



   
}
