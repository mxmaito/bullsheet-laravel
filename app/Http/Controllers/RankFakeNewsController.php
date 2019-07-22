<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  \App\FakeNew;
use Illuminate\Support\Facades\DB;
class RankFakeNewsController extends Controller
{
    public function index()
    {   $fakenews = \App\FakeNew::all()->take(5);
        $rankNew= DB::getPdo()->query('select fake_news_id, sum(chekresult),count(*),sum(chekresult)/count(*) as Average from bullsheet.chek_news group by fake_news_id order by Average desc')->fetchAll();

        $rank = DB::select('fake_news')
            ->join('users','users.id','=','fake_news.user_id')
            ->select('users.first_name','users.last_name',DB::raw('count(*) as news_count'))
            ->groupBy ('users.id')
            ->orderBy('news_count','desc')
            ->take(5)
            ->get();
      return view ('rankfakenews.index')->with('fakenews', $fakenews)->with('ranks', $rank)->with('rankNews', $rankNew);
    }


}

//DB::getPdo()->query('select fake_news_id, sum(chekresult),count(*),sum(chekresult)/count(*) as Average from bullsheet.chek_news group by fake_news_id order by Average desc')->fetchAll();


//$rankNew= DB::table('chek_news')
  //      ->join('fake_news','fake_news.id','=','fake_news_id')
    //    ->select ('fake_news.id','fake_news.title','fake_news.question','fake_news.fakenewsfile','fake_news.user_id','chek_news.fake_news_id',DB::raw('count(*) as news_count','sum(chekresult) as Suma'))
    //    ->groupBy('fake_news_id')
      //  ->orderBy('news_count/Suma','desc')
      //  ->take(5)
       // ->get();
