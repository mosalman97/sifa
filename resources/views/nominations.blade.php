@extends('layouts.app')

@section('content')

<h1>Messages</h1>

<table id="nomination">
  <tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Designation</th>
    <th>Organisation</th>

  </tr>
  @if(count($nominations)>0)
   @foreach($nominations as $nomination)

     <tr  style="cursor: pointer;" >
     <td><a href="nomination/{{ $nomination->id }}"><div class="myBox">{{$nomination->name}}</div></a></td>
     <td><a href="nomination/{{ $nomination->id }}"><div class="myBox">{{$nomination->yourcontact}}</div></a></td>
     <td><a href="nomination/{{ $nomination->id }}"><div class="myBox">{{$nomination->designation}}</div></a></td>
     <td><a href="nomination/{{ $nomination->id }}"><div class="myBox">{{$nomination->organisationname}}</div></a></td>
   </tr>
  @endforeach
 @endif
</table>
@endsection
<style media="screen">
#nomination {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#nomination td, #nomination th {
  border: 1px solid #ddd;
  padding: 8px;
}

#nomination tr:nth-child(even){background-color: #f2f2f2;}

#nomination tr:hover {background-color: #ddd;}

#nomination th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>
<script type="text/javascript">


$(".myBox").click(function() {
window.location = $(this).find("a").attr("href");
return false;
});
</script>
