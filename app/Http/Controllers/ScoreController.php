<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function index()
    {
        return view('scores', ['scores' => Score::all()->sortBy('value')]);
    }

    public function scores()
    {
        $id = Auth::id();

        return view('user_scores', ['scores' => Score::all()->where('user_id', $id)->sortBy('value')]);
    }

    public function game(Request $request)
    {
        $card1 = asset('/images/365_Sylvain.jpg');
        $card2 = asset('/images/367_Fred.jpg');
        $card3 = asset('/images/368_Romain.jpg');
        $card4 = asset('/images/372_Juliette.jpg');
        $card5 = asset('/images/391_Laurent.jpg');
        $card6 = asset('/images/397_Paul.jpg');
        $card7 = asset('/images/405_Kevin.jpg');
        $card8 = asset('/images/411_Tony.jpg');
        $card9 = asset('/images/462_Killian.jpg');
        $card10 = asset('/images/365_Sylvain.jpg');
        $card11 = asset('/images/367_Fred.jpg');
        $card12 = asset('/images/368_Romain.jpg');
        $card13 = asset('/images/372_Juliette.jpg');
        $card14 = asset('/images/391_Laurent.jpg');
        $card15 = asset('/images/397_Paul.jpg');
        $card16 = asset('/images/405_Kevin.jpg');
        $card17 = asset('/images/411_Tony.jpg');
        $card18 = asset('/images/462_Killian.jpg');


        $cards = [$card1, $card2, $card3, $card4, $card5, $card6, $card7, $card8, $card9, $card10, $card11, $card12,
            $card13, $card14, $card15, $card16, $card17, $card18];
        shuffle($cards);

        return view('game', ['images' => $cards]);
    }

    public function store(Request $request)
    {
        $score = new Score;
        $score->value = $request->clicks;
        $score->created_at = date('Y-d-m H:i:s');
        $score->updated_at = date('Y-d-m H:i:s');
        $score->user_id = Auth::id();
        $score->save();

        return redirect('scores');
    }

}
