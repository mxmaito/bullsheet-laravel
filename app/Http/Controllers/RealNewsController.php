<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $realnews = \App\RealNew::all();
      return view ('realnews.index')->with('realnews', $realnews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('realnews.create');
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

      $realnew = \App\RealNew::create($request->all());

      return redirect('/realnews/' . $realnew->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\RealNew $realnew)
    {
      return view('realnews.show', [
          'realnew' => $realnew
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

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
        'headline' => 'required',
        'subheading' => 'required',
        'realnewsfile' => 'file | required',
        'caption' => 'required',
        'text' => 'required',
      ];
    }
}
