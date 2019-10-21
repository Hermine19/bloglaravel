<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Country;
use App\Category;
class PostController extends Controller
{
    public function AllPosts(Request $request){
      // $user=User::find(1);
        //$post=Post::find(3);
     //   $country=Country::find(1);
       $posts=Post::all();
        //$posts=Post::where('id','>',6)->get();
       // $posts=Post::where('id','>',6)->orderBy('title')->take(2)->get();
        //$posts=$user->posts;
//        foreach ($posts as $post){
//            echo '<h2>'.$post->title.'</h2>';
//        }
       // dump($user->posts);

      //  dump($country->user);
//        foreach ($post->categories as $cat){
//            echo $cat->name;
//        }
      //  dump($post->categories);
        //$cat=$post->categories()->where('categories.id',5)->first();
       // dump($cat);
       // $cat=Category::find(5);
     //  dump($posts);
        return view('Pages.allposts',compact('posts'));
    }

    public function singlePost($id){
        return view('Pages.post',['id'=>$id]);
    }

    public function userPosts($id){
        $user=User::find($id);
      //  dump($user);
        return view('Pages.userposts',compact('user'));
    }

}
