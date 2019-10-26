<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    protected $fillable = ['tag_name'];

    protected $hidden = ['created_at', 'updated_at'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\News', 'news_tag')->withTimestamps();;
    }
}
