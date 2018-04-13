<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
    	'avatar', 'user_id', 'about', 'point', 
    ];

    public function getAvatarAttribute($avatar){
        return asset($avatar);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
