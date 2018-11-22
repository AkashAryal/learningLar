<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MessageCF;

class ContactFormController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, array('name'=>'required', 'email'=>'required'));
              //input() uses the html name field to get data for that input

      //create message
      $message = new MessageCF;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      //save message or update message
      $message->save();
      //redirect
      return redirect('/')->with('status', 'Message Sent');

      //For querying
      //$querydata = App\MessageCF::all(); will get all data in whatever table
      //Message is associated with in the form of an array

      //$querydata = App\MessageData::where('active', 1)
               //->orderBy('name', 'desc')
               //->take(10)
               //->get(); ()get()) retrives data
      // Retrieve a model by its primary key...
      //$flight = App\Flight::find(1); gets data with PK of 1
      //lots of other ways to query. look at https://laravel.com/docs/5.7/eloquent
      //Of course you can alwyas use normal php to query too.
    }
}
