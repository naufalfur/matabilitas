<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'name', 'slug',
    ];

    public function posts(){
    	return $this->hasMany('App\Post');
    }
}
