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

    <h2>Create a Club</h2>
    <br>

    {{ Form::open(array('action' => 'ClubController@store',
                        'class'  => 'clubdata')) }}

        <div>
            {{ Form::label('club_name','Club Name') }}
            {{ Form::text('club_name', null, array('size' => '50', 'placeholder' => 'Club Name')) }}
        </div>
        <div>
            {{ Form::label('club_locality','Club Locality') }}
            {{ Form::text('club_locality', null, array('size' => '50', 'placeholder' => 'Club Locality')); }}
        </div>
        <div>
            {{ Form::label('club_address1', 'Address'); }}
            {{ Form::text('club_address1', null, array('size' => '65', 'placeholder' => 'Address 1')); }}
        </div>
        <div>
            {{ Form::label('club_address1',' '); }}
            {{ Form::text('club_address2', null, array('size' => '65', 'placeholder' => 'Address 2')); }}
        </div>
        <div>
            {{ Form::label('club_city',' '); }}
            {{ Form::text('club_city', null, array('size' => '35', 'placeholder' => 'City')); }}
            {{ Form::text('club_state', null, array('size' => '6', 'placeholder' => 'State')); }}
            {{ Form::text('club_zip', null, array('size' => '6', 'placeholder' => 'Zip')); }}
        </div>
        <div>
            {{ Form::label('club_website', 'Club Website'); }}
            {{ Form::text('club_website', null, array('size' => '65')); }}
        </div>

        {{ Form::submit('Add Club') }}

    {{ Form::close() }}

@stop