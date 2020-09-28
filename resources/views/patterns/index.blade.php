@extends('base.layout')

@section('title', 'View patterns')

@section('content')
    <p>All pattern list</p>
    <br/>
    <a href="{{ URL::to('patterns/create') }}">Create</a>
    <br/>
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>Pattern</td>
            <td>Asking</td>
            <td>Multi</td>
            <td>Template</td>
            <td>Query</td>
        </tr>
        </thead>
        <tbody>
        @foreach($patterns as $key => $pattern)
            <tr>
                <td>{{$pattern->id}}</td>
                <td>{{$pattern->pattern}}</td>
                <td>{{$pattern->asking}}</td>
                <td>{{$pattern->multi}}</td>
                <td>{{$pattern->template}}</td>
                <td>{{$pattern->query}}</td>
                <td>
                    <a href="{{ URL::to('patterns/' . $pattern->id . '/edit') }}">Edit</a>
                    <a href="{{ URL::to('patterns/' . $pattern->id) }}">Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
