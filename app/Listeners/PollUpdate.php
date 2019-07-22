<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\FakeNewsChecked;
use App\Poll;

class PollUpdate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(FakeNewsChecked $event)
    {
      $total = \DB::select('select sum(value) as result from chek_news where user_id = ? and fake_news_id = ?', [auth()->id(), $event->fakeNew->id])[0]->result;

      Poll::create([
        'user_id'=> auth()->id(),
        'fake_news_id' =>$event->fakeNew->id,
        'result'=>$total
      ]);
    }
}
