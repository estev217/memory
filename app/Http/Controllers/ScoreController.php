<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
}
