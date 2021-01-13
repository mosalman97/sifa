
@extends('layouts.app')

@section('content')
<h1>Messages</h1>

 @if(count($nominations)>0)
  @foreach($nominations as $nomination)
    <ul class="list-group">
      <li class="list-group-item ">Name:{{$nomination->name}}</li>
    </ul>
  @endforeach
 @endif
@endsection
