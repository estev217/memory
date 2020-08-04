<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreController extends Controller
{
    public function index()
    {
        return view('scores', ['scores' => Score::all()->sortBy('value')]);
    }
}
