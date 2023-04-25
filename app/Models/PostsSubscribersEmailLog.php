<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsSubscribersEmailLog extends Model
{
    use HasFactory;
    protected $fillable = ['website_post_id', 'website_subscriber_id', 'is_sent'];


    public function websitePost()
    {
        return $this->belongsTo(WebsitePost::class);
    }

    public function websiteSubscriber()
    {
        return $this->belongsTo(WebsiteSubscriber::class);
    }




}
