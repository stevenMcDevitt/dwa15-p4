@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skating Teams
@stop

@section('content')

    <h2>Create a New Team</h2>
    <br>

    {{ Form::open(array('action' => 'TeamController@store',
                        'class'  => 'clubdata')) }}

        <div>
            {{ Form::label('team_name','Name') }}
            {{ Form::text('team_name', null, array('size' => '35', 'placeholder' => 'Team Name')) }}
        </div>
        <br>
        <div>
            {{ Form::label('complevel_id', 'Comp Level') }}
            {{ Form::select('complevel_id', $complevels) }}
        </div>
        <br>
        <div>
            {{ Form::label('program_notes', 'Program Notes') }}
            {{ Form::textarea('program_notes', null, array('cols' => '75','rows' => '5', 'placeholder' => 'Notes')) }}
        </div>
        <br>
        <div>
            {{ Form::label('competition_schedule', 'Schedule') }}
            {{ Form::textarea('competition_schedule', null, array('cols' => '75','rows' => '5', 'placeholder' => 'Schedule')) }}
        </div>

        {{ Form::submit('Add Team') }}

    {{ Form::close() }}

@stop