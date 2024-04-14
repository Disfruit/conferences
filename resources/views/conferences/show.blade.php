@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: forestgreen; color: white;">{{session('status')}}</div>
    @endif

    <div class="conference">
        <br>
        <h1 align="center">{{$conferences['title']}}</h1>
        <p align="center">{{$conferences['description']}}</p>
        <p align="center">{{$conferences['date']}}, {{$conferences['city']}}</p>
    </div>
@endsection
