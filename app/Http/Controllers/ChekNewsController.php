<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ChekNew;
use App\FakeNew;
use Auth;


class ChekNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fakenews = \App\FakeNew::all()->take(6);
      $rankNew = DB::table('chek_news')
            ->join('fake_news','fake_news.id','=','fake_news_id')
            ->select('fake_news.title','fake_news.question', 'fake_news.fakenewsfile')
            ->orderBy('chekresult','desc')
            ->take(5)
            ->get();
      return view ('rankfakenews.index')->with('fakenews', $fakenews)->with('rankNews', $rankNew);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $fn = FakeNew::find($request->fake_news_id);

      foreach ($request->get('chek') as $cheks => $value) {
        $fn->checks()->create([
          'cheks_id'=> $cheks,
          'user_id'=> auth()->id(),
          'value'=>$value
        ]);
      }

      event(new \App\Events\FakeNewsChecked($fn));

      return redirect('/rankfakenews');
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
