<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  \App\FakeNew;
use Illuminate\Support\Facades\DB;
class RankFakeNewsController extends Controller
{
    public function index()
    {
      $fakenews = \App\FakeNew::all()->take(6);
      $rank = DB::table('fake_news')
            ->join('users','users.id','=','fake_news.user_id')
            ->select('users.first_name','users.last_name',DB::raw('count(*) as news_count'))
            ->groupBy ('users.id')
            ->orderBy('news_count','desc')
            ->take(5)
            ->get();
      return view ('rankfakenews')->with('fakenews', $fakenews)->with('ranks', $rank);
    }
}
