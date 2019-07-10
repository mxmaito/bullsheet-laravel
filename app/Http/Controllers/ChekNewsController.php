<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ChekNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view ('fakenews.cheknew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //  $fake_new = FakeNew::findOrFail($request->fake_news_id);
      $cheknew = auth()->User()->chekNews()->create([
          'chek1' => $request->chek1,
          'chek2' => $request->chek2,
          'chek3' => $request->chek3,
          'chek4' => $request->chek4,
          'chek5' => $request->chek5,
          'chek6' => $request->chek6,
          'chek7' => $request->chek7,
          'chek8' => $request->chek8,
          'chek9' => $request->chek9,
          'chek10' => $request->chek10,
          'fake_news_id' => $request->fake_news_id,
          'chekresult' => $request->chek1 + $request->chek2,
          //'fake_news_id' => $request->chek10,

      ]);
/*
      $fake_new = FakeNew::findOrFail($request->fake_news_id);

      $cheknew = ChekNew::create(
        [
          'chek1' => $request->chek1,
          'chek2' => $request->chek2,
          'chek3' => $request->chek3,
          'chek4' => $request->chek4,
          'chek5' => $request->chek5,
          'chek6' => $request->chek6,
          'chek7' => $request->chek7,
          'chek8' => $request->chek8,
          'chek9' => $request->chek9,
          'chek10' => $request->chek10,
          'chekresult' => $request->chek1 + $request->chek2,
          'fake_news_id' => $fake_new->id,
          'user_id' => Auth::id(),

      ]);
      */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
