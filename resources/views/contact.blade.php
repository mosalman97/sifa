@extends('layouts.app')
@section('content')
<h2 class="headingContentBoth"><span>Contact</span></h2>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        {{Form::label('fname', 'First Name')}}
        <!-- <label for="fname">First Name</label> -->
      </div>
      <div class="col-75">
        {{Form::text('firstname', 'Your name.....')}}
        <!-- <input type="text" id="fname" name="firstname" placeholder="Your name.."> -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        {{Form::label('lname', 'Last Name')}}
        <!-- <label for="lname">Last Name</label> -->
      </div>
      <div class="col-75">
        {{Form::text('lastname', 'Your last name..')}}
        <!-- <input type="text" id="lname" name="lastname" placeholder="Your last name.."> -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
          {{Form::label('country', 'State')}}
        <!-- <label for="country">Country</label> -->
      </div>
      <div class="col-75">
        {{Form::select('country', ['krl' => 'Kerla', 'tn' => 'Tamil Nadu','krn' => 'Karnataka'])}}
        <!-- <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select> -->
      </div>
    </div>
    <div class="row">
      <div class="col-25">
          {{Form::label('subject', 'Subject')}}
        <!-- <label for="subject">Subject</label> -->
      </div>
      <div class="col-75">
        {{Form::textarea('subject', 'Write something..')}}
        <!-- <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> -->
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
{!! Form::close() !!}


@endsection
