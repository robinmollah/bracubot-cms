@extends('base.layout')

@section('title', 'View teachers')

@section('content')
    <p>All teachers list</p>
    <br/>
    <br/>
    <table>
        <thead>
        <tr>
            <td>Initial</td>
            <td>Name</td>
            <td>Department</td>
            <td>Operations</td>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $key => $teacher)
            <tr>
                <td>{{$teacher->initial}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->department}}</td>
                <td>
                    <a href="{{ URL::to('teachers/' . $teacher->initial . '/edit') }}">Edit</a>
                    <a href="{{ URL::to('teachers/' . $teacher->initial) }}">Details</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
