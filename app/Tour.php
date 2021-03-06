<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $guarded = [];

    public function panoramas(){
      return $this->hasMany(Panorama::class,'tour_id','id');
    }

    public function comments(){
      return $this->hasMany(Comment::class,'tour_id','id');
    }
}
