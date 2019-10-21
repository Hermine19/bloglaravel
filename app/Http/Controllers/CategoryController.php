<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class CategoryController extends Controller
{
    public function show(){
       // return view('Pages.cat',['title'=>'Heading my']);
//        $data=['title'=>'My heading'];
//        return view('Pages.cat',$data);
    //    return view('Pages.cat')->with('title','My Hading');
//       $view=view('Pages.cat');
//       $view->with('title','My Hading');
//       $view->with('title2','My Hading2');
//       $view->with('title3','My Hading3');
//       return $view;
      return view('Pages.cat')->withTitle('My friend');
    }
    public function CatById($id){
        $cat=Category::find($id);
        return view('Pages.cat',compact('cat'));
    }

    public function topMenuCat(){
        $cats=Category::all();
       dump($cats);
        return view('layouts.app');
    }
}
