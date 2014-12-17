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
    
    <h2>Team Details</h2>
    <h3>
    <div>
        Name: {{ $team->team_name }} ({{ $team->id }})
    </div>
    <div>
        Competition Level: {{ $team->complevel->competition_level_name }} ({{ $team->complevel_id }})
    </div></h3>
    <p class="bottom-sep"></p>
    <h2>Team Roster</h2>
    <br>
    <br>
    <p class="bottom-sep"></p>
    <h2>Eligible Skaters</h2>
    <br>

@stop

