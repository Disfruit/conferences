@extends('layouts.app')

@section('content')
    <h1>{{$conferences['title']}}</h1>
    <p>{{$conferences['content']}}</p>
@endsection
