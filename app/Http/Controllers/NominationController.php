<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomination;
class NominationController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request,[
      'name' =>'required',
      'youremail'=>'required'
    ]);


    $nomination = new Nomination;
    $nomination->name = $request->input('name');
    $nomination->nameofDirector = $request->input('nameofDirector');
    $nomination->youremail = $request->input('youremail');
    $nomination->directoremail = $request->input('directoremail');
    $nomination->yourcontact = $request->input('yourcontact');
    $nomination->directorcontact = $request->input('directorcontact');
    $nomination->designation = $request->input('designation');
    $nomination->companyurl = $request->input('companyurl');
    $nomination->organisationname = $request->input('organisationname');
    $nomination->officalfacebook = $request->input('officalfacebook');
    $nomination->address = $request->input('address');
    $nomination->mainproduct = $request->input('mainproduct');

    $nomination->yearofestnt = $request->input('yearofestnt');
    $nomination->keyuspofyour = $request->input('keyuspofyour');
    $nomination->totalemployees = $request->input('totalemployees');
    $nomination->categoryapplyfor = $request->input('categoryapplyfor');
    $nomination->anyawards = $request->input('anyawards');


    $nomination->save();

    return redirect('/')->with('succcess','Application Sent');


  }
  public function  getNominations()
  {
    $nominations = Nomination::all();
    return view('nominations')->with('nominations',$nominations);
  }
  public function  getNominationView()
  {

    $nomination = Nomination::findOrFail($id);

   // return view('nominations.show')->withTask($nomination);

    return view('nomination.show')->with('nomination',$nomination);
  }
  public function show($id)
{
$nominations = Nomination::all();
 // $contacts = Contact::where('id', $id)->first();
 // $contact = Contact::where('id','$contact=>id');
   // return view('contactView',compact('contact',$contact));
   // return view('contactView',['contact'=>$contact]);
   $previous = Nomination::where('id', '<', $id)->max('id');

   // get next user id
   $next = Nomination::where('id', '>', $id)->min('id');

   $data=array('id'=>$id, 'nominations'=>$nominations,'previous'=> $previous,'next'=> $next);

   return view('nominationView')->with('data',$data);

}
}
