<?php

namespace App\Jobs;

use App\Mail\ScheduleTourMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ScheduleTourJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
        public $tour;
    /**
     * Create a new job instance.
     */
    public function __construct($tour)
    {
        $this->tour = $tour;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to(env('ADMIN_MAIL'))->send(new ScheduleTourMail($this->tour));
    }
}
