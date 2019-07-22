<?php

namespace App\Observers;

use App\Poll;
use App\FakeNew;


class PollObserver
{
    /**
     * Handle the poll "created" event.
     *
     * @param  \App\Poll  $poll
     * @return void
     */
    public function created(Poll $poll)
    {

        //dd($poll);
        $avg= \DB::table('polls')
            -> where('fake_news_id', $poll->fake_news_id)
            ->avg('result');
            //dd($avg);
            $fn=\App\FakeNew::find($poll->fake_news_id);

            $fn->average=$avg;
            $fn->save();

            // $fn->update([
            //   'average' => $avg
            //   ]);

              //dd($fn);
    }

    /**
     * Handle the poll "updated" event.
     *
     * @param  \App\Poll  $poll
     * @return void
     */
    public function updated(Poll $poll)
    {
        //
    }

    /**
     * Handle the poll "deleted" event.
     *
     * @param  \App\Poll  $poll
     * @return void
     */
    public function deleted(Poll $poll)
    {
        //
    }

    /**
     * Handle the poll "restored" event.
     *
     * @param  \App\Poll  $poll
     * @return void
     */
    public function restored(Poll $poll)
    {
        //
    }

    /**
     * Handle the poll "force deleted" event.
     *
     * @param  \App\Poll  $poll
     * @return void
     */
    public function forceDeleted(Poll $poll)
    {
        //
    }
}
