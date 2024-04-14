@extends('layouts.app')
<style>
    .conference {
        background-color: #ffffff; /* White background */
        text-align: center;
        padding: 20px; /* Add padding for spacing */
    }

</style>

@section('content')
    @if(session('status'))
        <div style="background-color: forestgreen; color: white;">{{session('status')}}</div>
    @endif

    <div class="conference">
        <h1>{{$conferences['title']}}</h1>
        <p>{{$conferences['description']}}</p>
        <p>{{$conferences['date']}}, {{$conferences['city']}}</p>
    </div>
@endsection
