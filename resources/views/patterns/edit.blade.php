@extends('base.layout')

@section('title', 'Edit Patterns')

@section('content')

    {{ Form::model($teacher, array('route' => array('patterns.update', $teacher->initial), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('pattern', 'Pattern') }}
        {{ Form::text('pattern', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('asking', 'Asking') }}
        {{ Form::text('asking', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('multi', 'multi') }}
        {{ Form::number('multi', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('template', 'Template') }}
        {{ Form::text('template', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('query', 'Query') }}
        {{ Form::text('query', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the pattern!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
