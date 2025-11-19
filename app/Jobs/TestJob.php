<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Session;

class TestJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private readonly string $previousSessionId
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Session::setId($this->previousSessionId);
        Session::start();

        dd(
            request()->all(),
            session()->all(),
            auth()->user()?->toArray(),
            user()?->toArray(),
        );
    }
}
