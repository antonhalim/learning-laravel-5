<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
   public function about(){
    // $people =[];
     $people = ['Anton', 'Paul', 'Luke'];
     return view('pages.about', compact('people'));
   }

   public function contact(){

     return view('pages.contact');
   }
}
