<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeControler extends Controller
{
   public  function  index(){
//       $name="Zahid hasan";
//    return view('Front.master', compact('name') );
//     //return view('Student.add-student')->with('name',$name) ;
////     return view('Student.add-student',[
////         'name'=>$name
////     ]);
//


       return view('Front.home.home-content');
   }

   public function support(){
       return view('Front.support.support-content');
   }
   public  function  about(){
       return view('Front.about.about-content');
   }
   public  function blog(){
       return view('Front.blog.blog-content');
   }
   public function contact(){
       return view('Front.contact.contact-content');
   }
}
