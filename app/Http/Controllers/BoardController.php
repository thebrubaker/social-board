<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Board;
use App\SocialCard;

class BoardController extends Controller
{

    /**
     * Create a new board controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'destroy', 'store']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $name = $request->name;
        $board = new Board;
        $board->name = $name;
        $board->user_id = $user->id;
        $board->save();

        flash()->success('Your board "' . $board->name . '" has been created!');
        return redirect('board/' . $board->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $board = Board::find($id);
        $cards = SocialCard::where('board_id', '=', $id)->get();
        return view('board.show', compact(['cards', 'board']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $board = Board::find($id);
        if(!isset($board)) {
            \Flash::warning('The board you are trying to delete has already been deleted or does not exist.');
            return redirect('/dashboard');
        }
        if($board->user_id !== Auth::user()->id) {
            \Flash::warning('You cannot delete a board you do not own.');
            return redirect('/dashboard');
        }
        $cards = SocialCard::where('board_id', '=', $id)->get();
        if($cards) {
            foreach($cards as $card) {
                $card->delete();
            }
        }
        if($board) {
            $board->delete();
        }
        return redirect()->back();
    }
}
