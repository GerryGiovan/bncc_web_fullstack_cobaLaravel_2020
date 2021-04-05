<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function req (Request $request) {
       $fname = $request->input('fname');
       $lname = $request->input('lname');
       return view('Welcome', [ 'fname' => $fname ]);
   } 
}
