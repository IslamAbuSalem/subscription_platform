<?php

namespace App\Jobs;

use App\Models\PostsSubscribersEmailLog;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $emailsArray;
    public function __construct($emailsArray)
    {
        $this->emailsArray = $emailsArray;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $emailsToBeSentArray = $this->emailsArray;
        $data = array("body" => "there is a new post published in the website ");
        Mail::send("emails.postPromotion", $data, function ($message) use ($emailsToBeSentArray) {
            $message->to($emailsToBeSentArray)
                ->subject("New Post available!");
            $message->from("bostestsalem1@gmail.com", "Islam Abu Salem");
        });
    }
}
