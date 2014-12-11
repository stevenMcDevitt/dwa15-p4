@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Club Edit
@stop

@section('content')
	
    {{ Form::model($club, ['method' => 'put',
                           'action' => ['ClubController@update', $club->id],
                           'class' => 'clubdata']) }}

    <div>
        ID: {{ $club->id }}
    </div>
    <div>
        {{ Form::label('club_name', 'Name'); }}
        {{ Form::text('club_name', $club['club_name'], array('size' => '50', 'placeholder' => 'Club Name')); }}
    </div>
    <div>
        {{ Form::label('club_locality', 'Locality'); }}
        {{ Form::text('club_locality', $club['club_locality'], array('size' => '50', 'placeholder' => 'Club Locality')); }}
    </div>
    <div>
        {{ Form::label('club_address1', 'Address'); }}
        {{ Form::text('club_address1', $club['club_address1'], array('size' => '65', 'placeholder' => 'Address 1')); }}
    </div>
    <div>
        {{ Form::label('club_address1',' '); }}
        {{ Form::text('club_address2', $club['club_address2'], array('size' => '65', 'placeholder' => 'Address 2')); }}
    </div>
    <div>
        {{ Form::label('club_city',' '); }}
        {{ Form::text('club_city', $club['club_city'], array('size' => '35', 'placeholder' => 'City')); }}
        {{ Form::text('club_state', $club['club_state'], array('size' => '6', 'placeholder' => 'State')); }}
        {{ Form::text('club_zip', $club['club_zip'], array('size' => '6', 'placeholder' => 'Zip')); }}
    </div>
    <div>
        {{ Form::label('club_website', 'Club Website'); }}
        {{ Form::text('club_website', $club['club_website'], array('size' => '65')); }}
    </div>

    <br>
    {{ Form::submit('Update'); }}

    {{ Form::close(); }}

@stop

