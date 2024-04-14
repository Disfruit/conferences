@extends('layouts.app')
<style>
    .conference-list {
        background-color: #ffffff;
        padding: 10px;
    }

    .conference-item {
        background-color: #f7f7f7;
        margin-bottom: 10px;
        padding: 20px;
        border: 2px solid #6c6ade;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .conference-item h2, .conference-item p {
        color: #3b4351;
        margin: 0;
    }

    .btn-container {
        display: flex;
        align-items: center;
    }

    .btn {
        padding: 10px 20px;
        background-color: #6c6ade;
        color: #ffffff;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
        cursor: pointer;
    }

    .btn.delete {
        background-color: darkred;
        color: #ffffff;
        margin-top: 16px;
    }
    .create-button-container {
        padding: 10px 20px; /* Adjust padding as needed */
        background-color: #6c6ade;
        color: #ffffff;
        text-align: right; /* Align button container to the right */
        margin-top: 15px; /* Add margin at the top */
        margin-left: 10px; /* Adjust right margin to move the button slightly to the left */
        cursor: pointer;
    }
</style>
@section('content')
    @if(session('status'))
        <div style="background-color: darkred; color: white;">{{session('status')}}</div>
    @endif
    @if(auth()->check())
    <div style="text-align: left; margin-bottom: 10px;">
        <a href="{{route('conferences.create') }}"><button type="button" class="create-button-container">Create Conference</button></a>
    </div>
    @endif
    <div class="conference-list">
        @foreach($conferences as $conference)
            <div class="conference-item">
                <div>
                    <a href="{{ route('conferences.show', ['conference' => $conference['id']]) }}">
                        <h2>{{ $conference['title'] }}</h2>
                    </a>
                    <p>{{$conference['date']}}, {{$conference['city']}}</p>
                </div>
                @if(auth()->check())
                <div class="btn-container">
                    <a href="{{route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button" class="btn">Edit</button></a>
                    <form action="{{route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn delete">Delete</button>
                    </form>
                </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection
