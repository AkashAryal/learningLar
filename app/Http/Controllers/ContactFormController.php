<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, array('name'=>'required', 'email'=>'required'));
              //input() uses the html name field to get data for that input
      return $request->input('name');
    }
}
