<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    protected $fillable = ['news_id','username', 'content'];

    protected $hidden = ['created_at', 'updated_at'];

    public function news(){
        return $this->belongsTo('App\Models\News');
    }
}
