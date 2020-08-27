@extends('base.layout')

@section('title', 'Details of a Teacher')

@section('content')
    <h1>{{$teacher->name}}</h1>
    <p>Initial: {{$teacher->name}}</p>
    <p>Dept: {{$teacher->department}}</p>
    <p>Designation: {{$teacher->designation}}</p>
    <p>Room number: {{$teacher->room_number}}</p>
    <p>Mail id: {{$teacher->mail_id}}</p>
@endsection
