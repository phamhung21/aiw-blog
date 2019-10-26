<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'short_intro', 'file_name', 'content', 'author', 'tag_id',  'cate_id' ];

    protected $hidden = ['created_at', 'updated_at'];

    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }

    public function categories(){
        return $this->belongsTo('App\Models\Categories');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags','news_tag')->withTimestamps();
    }

}
