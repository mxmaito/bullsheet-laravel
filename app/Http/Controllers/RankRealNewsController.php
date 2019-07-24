<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  \App\RealNew;
use Illuminate\Support\Facades\DB;
class RankRealNewsController extends Controller
{
    public function index()
    {
      $realnews = \App\RealNew::all()->take(6);
      $rankNew= DB::table('judge_news')
            ->join('real_news','real_news.id','=','real_news_id')
            ->select('real_news.id','real_news.headline','real_news.subheading', 'real_news.text','real_news.realnewsfile','real_news.caption')
            ->orderBy('judge','desc')
            ->take(5)
            ->get();
      $rank = DB::table('real_news')
            ->join('users','users.id','=','real_news.user_id')
            ->select('users.first_name','users.last_name',DB::raw('count(*) as news_count'))
            ->groupBy ('users.id')
            ->orderBy('news_count','desc')
            ->take(5)
            ->get();
      return view ('rankrealnews.index')->with('realnews', $realnews)->with('ranks', $rank)->with('rankNews', $rankNew);
    }
}

//SELECT judge_news.judge, judge_news.real_news_id
//from judge_news
//join real_news where real_news.id = real_news_id
//order by judge desc



//$rank=DB::select('SELECT users.first_name as nombre, users.last_name as surname, count(*)as cuenta
//from real_news
//join users where users.id = real_news.user_id
//group by user_id
//order by cuenta desc');
//return $rank;
//}
