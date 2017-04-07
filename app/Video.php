<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    protected $fillable = [
        'video_name',
        'description',
        'logo_url',
        'background_url',
        'video_url',
        'category_id',
    ];

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    function getVideoUrl()
    {
        return (array) @unserialize($this->video_url);
    }
}
