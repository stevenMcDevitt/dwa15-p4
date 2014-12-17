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
    <div>
        {{ Form::label('email', 'Email'); }}
        {{ Form::text('email', $skater['email'], array('size' => '35', 'placeholder' => 'name@domain.com')); }}
    </div>
    <div>
        {{ Form::label('date_of_birth', 'Date of Birth'); }}
        {{ Form::text('date_of_birth', $skater['date_of_birth'], array('size' => '12', 'placeholder' => 'YYYY-MM-DD')); }}
    </div>
    <div>
        {{ Form::label('usfsa_id', 'USFSA ID'); }}
        {{ Form::text('usfsa_id', $skater['usfsa_id'], array('size' => '10', 'placeholder' => '########')); }}
    </div>
    <div>
        {{ Form::label('synchro_start_year', 'Synchro Start'); }}
        {{ Form::text('synchro_start_year', $skater['synchro_start_year'], array('size' => '5', 'placeholder' => 'YYYY')); }}
    </div>
    <div>
        {{ Form::label('skating_start_year', 'Skating Start'); }}
        {{ Form::text('skating_start_year', $skater['skating_start_year'], array('size' => '5', 'placeholder' => 'YYYY')); }}
    </div>
    <div>
        {{ Form::label('club_id', 'Club'); }}
        {{ Form::select('club_id', $clubs, $skater->club_id); }}
    </div>
    <div>
        {{ Form::label('team_id', 'Team'); }}
        {{ Form::select('team_id', $teams, $skater->team_id); }}
    </div> 
    <div>
        {{ Form::label('testlevel_id', 'Moves Test') }}
        {{ Form::select('testlevel_id', $testlevels, $skater->testlevel_id); }}
    <br/>
   </div>
    <div>
        {{ Form::label('notes', 'Skater Notes'); }}
        {{ Form::textarea('notes', $skater['notes'], array('cols' => '75','rows' => '5', 'placeholder' => 'Notes')); }}
    </div>
    <br>
    {{ Form::submit('Update'); }}

    {{ Form::close(); }}

@stop

