@extends('base.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

{{--    <p>This is appended to the master sidebar.</p>--}}
@endsection

@section('content')
    <a href="{{ URL::to('teachers') }}">Teachers</a>
    <br/>
    <a href="{{ URL::to('patterns') }}">Patterns</a>
@endsection
