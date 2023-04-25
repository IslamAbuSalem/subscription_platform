<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sendingEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send emails to all subscribers after adding a new post';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        dd(5);
    }
}
