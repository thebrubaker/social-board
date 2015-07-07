<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialCard;

class SocialCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($boardId)
    {
        $cards = SocialCard::where('board_id', '=', $boardId)->get();
        return view('social-card.show', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('social-card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id, Request $request)
    {
        $user = "1";
        $board = $id;

        $card = new SocialCard;
        $card->reference = $card->removeScript($request->reference);
        $card->user_id = $user;
        $card->board_id = $board;
        $card->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
