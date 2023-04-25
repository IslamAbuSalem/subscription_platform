<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitePost extends Model
{
    use HasFactory;
    protected $fillable = ['website_id', 'title', 'description'];


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
