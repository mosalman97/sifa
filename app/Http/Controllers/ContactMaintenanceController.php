<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactMaintenanceController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request,[
      'firstname' =>'required',
      'subject'=>'required'
    ]);


    $contact = new Contact;
    $contact->firstname = $request->input('firstname');
    $contact->lastname = $request->input('lastname');
    $contact->country = $request->input('country');
    $contact->subject = $request->input('subject');



    $contact->save();

    return redirect('/')->with('succcess','Message Sent');



  }
  public function  getContact()
  {
    $contacts = Contact::all();
    return view('contacts')->with('contacts',$contacts);
  }
  public function  getContactView($id)
  {
    $contact = Contact::where('id',$id);
    return view('contactView',['contact'=>$contact]);
  }
  // public function show($id) {
  //     // $contact = Contact::where('id',$id);
  //     $contact = DB::select('select * from contact where id = ?',[$id]);
  //     return view('contactView',['contact'=>$contact]);
  //  }
   public function show($id)
{
$contacts = Contact::all();
  // $contacts = Contact::where('id', $id)->first();
  // $contact = Contact::where('id','$contact=>id');
    // return view('contactView',compact('contact',$contact));
    // return view('contactView',['contact'=>$contact]);


    // get previous user id
    $previous = Contact::where('id', '<', $id)->max('id');

    // get next user id
    $next = Contact::where('id', '>', $id)->min('id');

    $data=array('id'=>$id, 'contacts'=>$contacts,'previous'=> $previous,'next'=> $next);

    return view('contactView')->with('data',$data);

}
  // public function edit($id)
  //   {
  //       //
  //    $crud= Crud::find($id);
  //    return view('edit', compact('crud'));
  //   }

}
