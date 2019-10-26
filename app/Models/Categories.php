<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    
    protected $table = 'categories';

    protected $fillable = ['cate_name'];

    protected $hidden = ['created_at', 'updated_at'];

    public function news(){
        return $this->hasMany('App\Models\News','cate_id','id');
    }
}
