@extends('layouts.app')

@section('content')

<h1>Messages</h1>


<table id="contact">
  <tr>
    <th>S.No</th>
    <th>Name</th>
    <th>State</th>
    <th>Message</th>

  </tr>
  @if(count($contacts)>0)
  @foreach($contacts as $contact)

  <tr >
  <td><a href="edit/{{ $contact->id }}"><div class="myBox">{{$contact->id}}</div></a></td>
  <td><a href="edit/{{ $contact->id }}"><div class="myBox">{{$contact->firstname}}</div></a></td>
  <td><a href="edit/{{ $contact->id }}"><div class="myBox">{{$contact->country}}</div></a></td>
  <td><a href="edit/{{ $contact->id }}"><div class="myBox">{{$contact->subject}}</div></a></td>
</tr>

  @endforeach
@endif
</table>
@endsection

<style >
#contact {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#contact td, #contact th {
  border: 1px solid #ddd;
  padding: 8px;
 
}

#contact tr:nth-child(even){
  background-color: #f2f2f2;
  color: white;
  }

#contact tr:hover {
  background-color:#f2f2f2;
  cursor: pointer;
  }

#contact th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#contact a {
    color: #111;
    text-decoration: none;
    background-color: transparent;
}
</style>