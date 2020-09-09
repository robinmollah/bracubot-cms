@extends('base.layout')

@section('title', 'Details of a Teacher')

@section('content')
    <h1>{{$pattern->id}}</h1>
    <p>Pattern: {{$pattern->pattern}}</p>
    <p>Asking: {{$pattern->asking}}</p>
    <p>Multi: {{$pattern->multi}}</p>
    <p>Template: {{$pattern->template}}</p>
    <p>Query: {{$pattern->query}}</p>
@endsection
