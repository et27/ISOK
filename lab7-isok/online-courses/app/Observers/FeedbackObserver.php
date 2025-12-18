<?php

namespace App\Observers;

use App\Models\Feedback;

class FeedbackObserver
{
    public function creating(Feedback $feedback)
    {
        $feedback->status = 'new';
    }
    /**
     * Handle the Feedback "created" event.
     */
    public function created(Feedback $feedback): void
    {
        $feedback->course->touch();     }

    /**
     * Handle the Feedback "updated" event.
     */
    public function updated(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "deleted" event.
     */
    public function deleted(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "restored" event.
     */
    public function restored(Feedback $feedback): void
    {
        //
    }

    /**
     * Handle the Feedback "force deleted" event.
     */
    public function forceDeleted(Feedback $feedback): void
    {
        //
    }
}
