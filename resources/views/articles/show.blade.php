@extends('app')

@section('content')
  <h1>{{$article->title}}</h1>
  <br>
  <p>
    {{$article->body}}
  </p>
@stop
