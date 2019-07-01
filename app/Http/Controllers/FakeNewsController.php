<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fakenews = \App\FakeNew::all();
      return view ('fakenews.index')->with('fakenews', $fakenews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('fakenews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, $this->getValidationRules());

      $fakenew = \App\FakeNew::create($request->all());

      //$request->fakenewsfile->storePublicly('fakenewsfiles');

      //$filepath = $request->fakenewsfile->storePublicly('fakenewsfiles');

      return redirect('/fakenews/' . $fakenew->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\FakeNew $fakenew)
    {
      return view('fakenews.show' , [
        'fakenew' => $fakenew
      ]);
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

    private function getValidationRules(){
      return[
        'title' => 'required',
        'question' => 'required',
      ];
    }
}
