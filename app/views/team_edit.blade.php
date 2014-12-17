@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Team
@stop

@section('content')
    <h2>Edit a Team</h2>
    <br>
	
    {{ Form::model($team, ['method' => 'put',
                           'action' => ['TeamController@update', $team->id],
                           'class' => 'clubdata']) }}

        <div>
            ID: {{ $team->id }}
        </div>
        <div>
            {{ Form::label('team_name','Name') }}
            {{ Form::text('team_name', $team['team_name'], array('size' => '35', 'placeholder' => 'Team Name')) }}
        </div>
        <br>
        <div>
            {{ Form::label('complevel_id', 'Comp Level') }}
            {{ Form::select('complevel_id', $complevels, $team->complevel_id) }}
        </div>
        <br>
        <div>
            {{ Form::label('program_notes', 'Program Notes') }}
            {{ Form::textarea('program_notes', $team['program_notes'], array('cols' => '75','rows' => '5', 'placeholder' => 'Notes')) }}
        </div>
        <br>
        <div>
            {{ Form::label('competition_schedule', 'Schedule') }}
            {{ Form::textarea('competition_schedule', $team['competition_schedule'], array('cols' => '75','rows' => '5', 'placeholder' => 'Schedule')) }}
        </div>
        <br>
        {{ Form::submit('Update'); }}

    {{ Form::close(); }}

@stop

