@extends('layouts.app')

@section('title','Table')
@section('content')
    <table class="table">
        <thread>
            <tr>
                <th>name</th>
                <th>genre</th>
                <th>release date</th>
            </tr>
        </thread>
        <tbody>
        <tr class="active">
            <td>The Shawshank Redemption</td>
            <td>Crime, Drama</td>
            <td>14 October, 1994</td>
        </tr>
        <tr class="active">
            <td>The Shawshank Redemption</td>
            <td>Crime, Drama</td>
            <td>14 October, 1994</td>
        </tr>
        </tbody>
    </table>
    <body>
        <h1>This website was created by Julius</h1>
    </body>
@endsection
