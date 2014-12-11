@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skaters
@stop

@section('content')
    <h2>Edit a Skater</h2>
    <br>
	
    {{ Form::model($skater, ['method' => 'put',
                             'action' => ['SkaterController@update', $skater->id],
                             'class' => 'clubdata']) }}

    <div>
        ID: {{ $skater->id }}
    </div>
    <div>
        {{ Form::label('last_name', 'Last Name'); }}
        {{ Form::text('last_name', $skater['last_name'], array('size' => '35', 'placeholder' => 'Last Name')); }}
    </div>
    <div>
        {{ Form::label('first_name', 'First Name'); }}
        {{ Form::text('first_name', $skater['first_name'], array('size' => '35', 'placeholder' => 'First Name')); }}
    </div>

    <br>
    {{ Form::submit('Update'); }}

    {{ Form::close(); }}

@stop

