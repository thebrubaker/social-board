<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Board;
use App\SocialCard;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $boards = Board::all();
        return view('board.index', compact('boards'));
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
        $user = "1";
        $name = $request->name;
        $board = new Board;
        $board->name = $name;
        $board->user_id = $user;
        $board->save();

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
        $cards = SocialCard::where('board_id', '=', $id)->get();
        if($cards) {
            foreach($cards as $card) {
                $card->delete();
            }
        }
        if($board) {
            $board->delete();
        }
        return redirect('board');
    }
}
