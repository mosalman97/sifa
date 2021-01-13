@extends('layouts.app')
@section('content')
  {!! Form::open(['url' => 'main/checkLogin']) !!}
<div class="container">
<!-- 
  @if(isset(Auth::user()->email))
  <script type="text/javascript">
    window.location="/fameSouth/public/main/login";
  </script>
  @endif -->
@if($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button"class="close" data-dismiss="alert">x</button>
  <strong>{{$message}}</strong>
</div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif
    <form method="post" action="{{url('main/checkLogin')}}">
      {{csrf_field()}}
  <div class="row">
    <h2 class="headingContentBoth"><span>Login Details</span></h2>

  </div>

    <div class="row">
      <div class="col-25">
        {{Form::label('email', 'Email')}}
        <!-- <label for="fname">First Name</label> -->
      </div>
      <div class="col-75">
        
         <input type="text" id="fname" name="firstname" placeholder="Your Name.."> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        {{Form::label('password', 'Password')}}
        <!-- <label for="lname">Last Name</label> -->
      </div>
      <div class="col-75">
        
         <input type="text" id="lname" name="lastname" placeholder="Your Password.."> 
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
{!! Form::close() !!}


@endsection
