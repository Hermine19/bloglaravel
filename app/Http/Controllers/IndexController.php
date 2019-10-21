<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
class IndexController extends Controller
{
  public function index(){
      $posts=Post::where('id', '<', 4)->paginate(6);
      return view('welcome',compact('posts'));
  }
}
