<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{

public function posts(){
    //return $this->belongsToMany('App\Post','category_post','category_id','post_id');//category_post
    return $this->belongsToMany('App\Post','category_post','category_id','post_id');//category_post
}

}
