@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Sakting Clubs
@stop

@section('content')
    
    <h2>Create a Club</h2>

    {{ Form::open(array('action' => 'ClubController@store',
                        'class'  => 'clubdata')) }}


        {{ Form::label('club_name','Club Name') }}
        {{ Form::text('club_name', null, array('size' => '50', 'placeholder' => 'Club Name')) }}
        <br>
        {{ Form::label('club_locality','Club Locality') }}
        {{ Form::text('club_locality') }}
        <br>
        {{ Form::submit('Add Club') }}

    {{ Form::close() }}

@stop