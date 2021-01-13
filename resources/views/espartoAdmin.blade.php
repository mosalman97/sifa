@extends('layouts.app')

@section('content')
<div class="container box">
  <h3 align="center"> Welcome Admin</h3><br/>
  @if(isset(Auth::user()->email))
   <div class="alert alert-danger success-block">
    <strong>Welcome {{Auth::user()->email }}</strong><br/>
    <a href="{{'/main/logout'}}">Logout</a>
  </div>
<!--  else
  <script type="text/javascript">
    window.location ="/main";
  </script> -->
  <!-- <ul class="adminView">
  <li class="adminViewli"><a class="active" href="#home">Home</a></li>

  <li><a  class="adminViewa" href="#about" onclick="getNominations()">Nominations</a></li>
  <li><a class="adminViewa" href="#about"  onclick="getMessages()">Messages</a></li>
  <li><a class="adminViewa" href="#about">About</a></li>

</ul> -->
<div id="id01"> Welcome</div>
  @endif
</div>

<!-- <style>
ul.adminView {
list-style-type: none;
margin: 0;
padding: 0;
width: 200px;
background-color: #f1f1f1;
}

li.adminViewli a.adminViewa {
display: block;
color: #000;
padding: 8px 16px;
text-decoration: none;
}

li.adminViewli a.active {
background-color: #4CAF50;
color: white;
}

li.adminViewli a:hover:not(.active) {
background-color: #555;
color: white;
}
</style>
<script>
function getNominations() {
var myElement = document.getElementById("id01");
document.getElementById("id01").innerHTML="";

document.getElementById("id01").innerHTML= " "; -->

// document.URL('/contacts');
// insertAdjacentHTML("afterend",
//                 " echo url('/contacts'); ");






<!--


  }
function getMessages() {
  var myElement = document.getElementById("id01");
  document.getElementById("id01").innerHTML="";
document.getElementById("id01").innerHTML ="Hi this is fieasrf";

  } -->
<!-- </script> -->

@endsection
