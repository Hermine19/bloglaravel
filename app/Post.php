<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
// protected $table='posts';//ete axjusaki anuny chi hamynknum modeli anuni het posts apa nshum enq sa
//protected $primaryKey='id';//ete primary key urish dasht e
 //protected $incrementing=FALSE;//anjatum e autoincrementy
  // public $timestamps=FALSE;//ete usum enq created-at ev uppdated at dashtery hanenq

public function user(){
    return $this->belongsTo('App\User');
}
public function categories(){
    return $this->belongsToMany('App\Category');
}



}
