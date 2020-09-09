@extends('base.layout')

@section('title', 'Create a teacher')

@section('content')

    {{ Form::open(array('url' => 'teachers')) }}

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

    {{ Form::submit('Create teacher!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
