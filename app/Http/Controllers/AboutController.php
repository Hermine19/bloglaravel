<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
//    protected $request;
//    public function __construct(Request $request)
//    {
//          $this->request=$request;
//    }

    public function IndexPage(){
     //$view= view('Pages.about',['title'=>'ok']); echo $view;

    //  view()->name('Pages.about','aboutme');
    // return view()->of('aboutme')->withTitle('ok');
       // DB::insert("INSERT INTO `posts` (`title`,`short_text`,`body`,`image`,`user_id`,`category_id`) VALUES (?, ?, ?, ?, ?, ?)",['Henrikh Mkhitaryan to miss clash against Sampdoria','Armenian squad and Roma midfielder Henrikh Mkhitaryan will not play against Sampdoria. Armenian football player continues recovery from injury, Il Tempo reported.','Armenian squad and Roma midfielder Henrikh Mkhitaryan will not play against Sampdoria. Armenian football player continues recovery from injury, Il Tempo reported.doria clash is scheduled for October 20.','images/heno.jpg','2','8']);
         //$res=DB::connection()->getPdo()->lastInsertId();
       //  dump($res);

    //  $path=config('view.paths');
     // return view()->file($path[0].'/Pages/about.blade.php');
      $data=['name'=>'Ann','age'=>12,'color'=>'red'];
      return view('Pages.about',$data);

  }
  public function ContactPage(Request $request){
      if(view()->exists('Pages.contact')){
       if ($request->isMethod('post')){
              $request->flash();
             return redirect()->route('contact');
            //  $request->flashOnly('fname','lname');
            //  $request->flashExcept('fname','lname');
         // print_r($request->all());
       }
       return view('Pages.contact');}
       abort(404);
  }


}
