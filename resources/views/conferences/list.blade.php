@extends('layouts.app')
@section('title','Table')
@section('content')
    <table class="table">
        <thread>
            <tr>
                <th>Article Name</th>
                <th>City</th>
                <th>Date</th>
            </tr>
        </thread>
        <tbody>
        <tr class="active">
            <td>The Shawshank Redemption</td>
            <td>Crime, Drama</td>
            <td>14 October, 1994</td>
            <td bgcolor="#6c6ade" >Check</td>
        </tr>
        <tr class="active">
            <td>The Shawshank Redemption</td>
            <td>Crime, Drama</td>
            <td>14 October, 1994</td>
        </tr>
        <tr>

        </tr>
        </tbody>
    </table>
    <body>
@endsection
