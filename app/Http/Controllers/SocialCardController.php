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
    public function index()
    {
        $cards = SocialCard::find($id);
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
    public function store(Request $request)
    {
        $user = \Auth::user()->id;
        $board = $request->id;

        $card = new SocialCard;
        $card->reference = $card->removeScript($request->reference);
        $card->user_id = $user;
        $card->board_id = $board;
        $card->save();

        flash()->success('Your card has been added.');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $card = SocialCard::find($id);
        if(!isset($card)) {
            flash()->error('The card you are trying to delete has already been deleted or does not exist.');
            return redirect('/dashboard');
        }
        if($card->user_id !== auth()->user()->id) {
            flash()->error('You cannot delete a card you do not own.');
            return redirect('/dashboard');
        }
        if($card) {
            $card->delete();
        }
        flash()->error('The card has been removed.');
        return redirect()->back();
    }
}
