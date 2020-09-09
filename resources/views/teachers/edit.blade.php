@extends('base.layout')

@section('title', 'View teachers')

@section('content')

    {{ Form::model($teacher, array('route' => array('teachers.update', $teacher->initial), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('initial', 'Initial') }}
        {{ Form::text('initial', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('mail_id', 'Mail id') }}
        {{ Form::text('mail_id', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('department', 'Department') }}
        {{ Form::text('department', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('room_number', 'Room number') }}
        {{ Form::text('room_number', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the teacher!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
