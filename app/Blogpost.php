<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $fillable = array('title', 'subtitle','slug','blog_id','image','imagemedium','imagethumb','imagedescription','imageauthor','imagelink','originallink','credit','sourcepartner_id','description','country_id','user_id','creator','lat','lng','workflow_id');


    public static function get_youtube_video_image($youtube_code)
    {

        preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $youtube_code, $matches);
        if(isset($matches[2]) && $matches[2] != ''){
            $YoutubeCode = $matches[2];
        }

        return $YoutubeCode;
    }


    public function createdby()
    {
        return $this->belongsTo('App\User', 'creator','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function workflow()
    {
        return $this->belongsTo('App\Workflow','workflow_id','id');
    }

}