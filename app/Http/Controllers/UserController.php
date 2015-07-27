<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Board;

class UserController extends Controller
{

    /**
     * Create a new user controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Return the user's dashboard
     * @return Illuminate/View
     */
    public function dashboard() 
    {
        $owned = Board::where('user_id', '=', Auth::user()->id)->get();
        $public = Board::all();
        return view('board.index', compact(['owned', 'public']));
    }

    /**
     * Return a form to edit the user's preferences
     * @return Illuminate/View
     */
    public function getPreferences()
    {
        # code...
    }

    /**
     * Update the user's preferences
     * @return Illuminate/View
     */
    public function postPreferences()
    {
        # code...
    }
}
