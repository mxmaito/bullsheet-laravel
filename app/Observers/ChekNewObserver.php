<?php

namespace App\Observers;

use App\ChekNew;

class ChekNewObserver
{
    /**
     * Handle the chek new "created" event.
     *
     * @param  \App\ChekNew  $chekNew
     * @return void
     */
    public function created(ChekNew $chekNew)
    {
        dd($chekNew);
    }

    /**
     * Handle the chek new "updated" event.
     *
     * @param  \App\ChekNew  $chekNew
     * @return void
     */
    public function updated(ChekNew $chekNew)
    {
        //
    }

    /**
     * Handle the chek new "deleted" event.
     *
     * @param  \App\ChekNew  $chekNew
     * @return void
     */
    public function deleted(ChekNew $chekNew)
    {
        //
    }

    /**
     * Handle the chek new "restored" event.
     *
     * @param  \App\ChekNew  $chekNew
     * @return void
     */
    public function restored(ChekNew $chekNew)
    {
        //
    }

    /**
     * Handle the chek new "force deleted" event.
     *
     * @param  \App\ChekNew  $chekNew
     * @return void
     */
    public function forceDeleted(ChekNew $chekNew)
    {
        //
    }
}
