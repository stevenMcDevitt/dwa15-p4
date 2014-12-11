@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skating Clubs
@stop

@section('content')

    <h2>Create a New Skater</h2>
    <br>

    {{ Form::open(array('action' => 'SkaterController@store',
                        'class'  => 'clubdata')) }}

        <div>
            {{ Form::label('last_name','Last Name') }}
            {{ Form::text('last_name', null, array('size' => '35', 'placeholder' => 'Last Name')) }}
        </div>
        <div>
            {{ Form::label('first_name','First Name') }}
            {{ Form::text('first_name', null, array('size' => '35', 'placeholder' => 'First Name')) }}
        </div>

        {{ Form::submit('Add Skater') }}

    {{ Form::close() }}

@stop