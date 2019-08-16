<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\cheks;

class FakeNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fakenews = DB::table('fake_news')->paginate(9);
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

      $request->fakenewsfile->storePublicly('public/fakenewsfiles');

      if(isset($request->fakenewsfile)){
        $rutaArchivo = $request->fakenewsfile->storePublicly('public/fakenewsfiles');
        $nombreArchivo = basename($rutaArchivo);
      }

      $fakenew = auth()->user()->fakeNews()->create([
          'title' => $request->title,
          'question' => $request->question,
          'fakenewsfile' => $nombreArchivo,
      ]);

      //$filepath = $request->fakenewsfile->storePublicly('fakenewsfiles');

      return redirect('/fakenews/' . $fakenew->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\FakeNew $fakenew,\App\cheks $cheks )
    {
      $cheks=cheks::all();
      //dd($cheks->toArray());
      return view('fakenews.show' , [
        'fakenew' => $fakenew,
        'cheks' => $cheks
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
        'fakenewsfile' => 'required | file',
        'question' => 'required',
      ];
    }
}
