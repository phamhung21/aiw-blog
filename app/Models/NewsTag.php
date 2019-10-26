<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    protected $table = 'news_tag';

    protected $fillable = ['id', 'news_id', 'tags_id'];

    protected $hidden = ['created_at', 'updated_at'];

    public function news(){
        return $this->hasMany('App\Models\News');
    }

    // public function categories(){
    //     return $this->belongsTo('App\Models\Categories');
    // }

    public function tags()
    {
        return $this->hasMany('App\Models\Tags');
    }
}
