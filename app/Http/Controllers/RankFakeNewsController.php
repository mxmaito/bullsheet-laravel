<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  \App\FakeNew;
use Illuminate\Support\Facades\DB;
class RankFakeNewsController extends Controller
{
    public function index()
    {   $fakenews = \App\FakeNew::all()->take(5);
        $rankNew= DB::table('chek_news')
            ->join('fake_news','fake_news.id','=','fake_news_id')
            ->select('fake_news.id','fake_news.title','fake_news.question', 'fake_news.fakenewsfile')
            ->orderBy('chekresult','asc')
            ->take(5)
            ->get();

        $rank = DB::table('fake_news')
            ->join('users','users.id','=','fake_news.user_id')
            ->select('users.first_name','users.last_name',DB::raw('count(*) as news_count'))
            ->groupBy ('users.id')
            ->orderBy('news_count','desc')
            ->take(5)
            ->get();
      return view ('rankfakenews.index')->with('fakenews', $fakenews)->with('ranks', $rank)->with('rankNews', $rankNew);
    }


}

//SELECT chek_news.fake_news_id, chek_news.chekresult
//from chek_news
//join fake_news where fake_news.id = fNeake_news_id
//order by chekresult desc
