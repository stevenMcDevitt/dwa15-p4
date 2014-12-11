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
    
    <h2>Club Details</h2>
	<br>
    <div>
        ID: {{ $club->id }}
    </div>
    <div>
        Club Name: {{ $club->club_name }}
    </div>
    <div>
        Club Locality {{ $club->club_locality }}
    </div>
    <div>
       	Club Address {{ $club->club_address1 }}<br>
        {{ $club->club_city }} {{ $club->club_state }} {{ $club->club_zip }}
    </div>
    <div>
        Club Website {{ $club->club_website }}
    </div>
    <div>
        Last Updated {{ $club->updated_at }}
    </div>

@stop

