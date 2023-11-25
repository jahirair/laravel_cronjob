<?php

namespace App\Console\Commands;

use App\Mail\Cronjob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ScheduleEmail extends Command {
    /**
    * The name and signature of the console command.
    *
    * @var string
    */
    protected $signature = 'send:email';

    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Send email by scheduling cron job';

    /**
    * Execute the console command.
    */

    public function handle() {
        Mail::to( 'test@gmail.com' )->send( new Cronjob() );
    }
}
