<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'price','image','discount',
    ];

    public function images(){
        return $this->hasOne('App\Images');
    }
}
