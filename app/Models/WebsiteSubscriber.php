<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSubscriber extends Model
{
    use HasFactory;

    protected $fillable = ['website_id', 'email_address'];
    public function website()
    {
        return $this->belongsTo(Website::class);
    }


    public function getWebsiteDomainAttribute()
    {
        $website = $this->website;
        return $website? $website->website_domain :"";
    }




}
