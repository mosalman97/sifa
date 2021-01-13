<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request)
    {
      $this->validate($request,[
        'name' =>'required',
        'youremail'=>'required'
      ]);


      $message = new Message;
      $message->name = $request->input('name');
      $message->nameofDirector = $request->input('nameofDirector');
      $message->youremail = $request->input('youremail');
      $message->directoremail = $request->input('directoremail');
      $message->yourcontact = $request->input('yourcontact');
      $message->directorcontact = $request->input('directorcontact');
      $message->designation = $request->input('designation');
      $message->companyurl = $request->input('companyurl');
      $message->organisationname = $request->input('organisationname');
      $message->officalfacebook = $request->input('officalfacebook');
      $message->address = $request->input('address');
      $message->mainproduct = $request->input('mainproduct');

      $message->yearofestnt = $request->input('yearofestnt');
      $message->keyuspofyour = $request->input('keyuspofyour');
      $message->totalemployees = $request->input('totalemployees');
      $message->categoryapplyfor = $request->input('categoryapplyfor');
      $message->anyawards = $request->input('anyawards');


      $message->save();

      return redirect('/')->with('succcess','Message Sent');


    }
    public function  getMessage()
    {
      $messages = Message::all();
      return view('messages')->with('messages',$messages);
    }

}
