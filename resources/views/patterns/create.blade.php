@extends('base.layout')

@section('title', 'Create a Pattern')

@section('content')

    {{ Form::open(array('url' => 'patterns')) }}

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

    {{ Form::submit('Create Pattern', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection
