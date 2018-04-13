<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title', 'content_post', 'featured', 'category_id', 'slug', 'user_id', 'city_id',
    ];

    public function getTitleAttribute($title){
        return ucfirst($title);
    }

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }

    protected $dates = [
        'deleted_at'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }
}
