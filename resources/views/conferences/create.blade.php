@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <div class="container">
        <div class="content">
            <form action="{{ route('conferences.store') }}" method="POST">
                @csrf
                @include('conferences.partials.form')
                <div style="margin-top: 20px;">
                    <input type="submit" value="Create" style="border: 2px solid #ffffff; border-radius: 5px; padding: 8px 16px; margin-right: 10px;">
                </div>
            </form>
        </div>
    </div>
@endsection
