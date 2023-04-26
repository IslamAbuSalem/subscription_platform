<?php

namespace App\Console\Commands;

use App\Jobs\sendEmail;
use App\Models\PostsSubscribersEmailLog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

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
        $emailsToBeSent = PostsSubscribersEmailLog::with(['websitePost','websiteSubscriber'])
            ->where('is_sent',0)
            ->get();
        $emailsToBeSentArray = $emailsToBeSent->count() ? $emailsToBeSent->pluck('website_subscriber_email')->toArray() : [];
        if (!empty($emailsToBeSentArray)) {
            $job = new sendEmail($emailsToBeSentArray);
            dispatch($job);
        }
    }
}
