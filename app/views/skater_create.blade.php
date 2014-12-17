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
        <div>
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', null, array('size' => '35', 'placeholder' => 'name@domain.com')) }}
        </div>
        <div>
            {{ Form::label('date_of_birth', 'Date of Birth') }}
            {{ Form::text('date_of_birth', null, array('size' => '12', 'placeholder' => 'YYYY-MM-DD')) }}
        </div>
        <div>
            {{ Form::label('usfsa_id', 'USFSA ID') }}
            {{ Form::text('usfsa_id', null, array('size' => '10', 'placeholder' => '########')) }}
        </div>
        <div>
            {{ Form::label('synchro_start_year', 'Synchro Start') }}
            {{ Form::text('synchro_start_year', null, array('size' => '5', 'placeholder' => 'YYYY')) }}
        </div>
        <div>
            {{ Form::label('skating_start_year', 'Skating Start') }}
            {{ Form::text('skating_start_year', null, array('size' => '5', 'placeholder' => 'YYYY')) }}
        </div>
        <div>
            {{ Form::label('club_id', 'Club') }}
            {{ Form::select('club_id', $clubs) }}
        </div>
        <div>
            {{ Form::label('team_id', 'Team') }}
            {{ Form::select('team_id', $teams) }}
        </div> 
        <div>
            {{ Form::label('testlevel_id', 'Moves Test') }}
            {{ Form::select('testlevel_id', $testlevels) }}
        </div>
        <div>
            {{ Form::label('notes', 'Skater Notes') }}
            {{ Form::textarea('notes', null, array('cols' => '75','rows' => '5', 'placeholder' => 'Notes')) }}
        </div>

        {{ Form::submit('Add Skater') }}

    {{ Form::close() }}

@stop