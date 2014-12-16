@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skater
@stop

@section('content')
    
    <h2>Skater Details</h2>
	<br>
    <div>
        ID: {{ $skater->id }}
    </div>
    <div>
        Name: {{ $skater->last_name }}, {{ $skater->first_name }}
    </div>
    <div>
        Date of Birth: {{ $skater->date_of_birth }}
    </div>
    <div>
        USFSA ID: {{ $skater->usfsa_id }}
    </div>
    <div>
        Email: {{ $skater->email }}
    </div>
    <br>
    <div>
        Club ID: {{ $skater->club->club_name }} ({{ $skater->club_id }})
    </div>
    <div>
        Team ID: {{ $skater->team->team_name }} ({{ $skater->team_id }}) 
    </div> 
    <div>
        Synchro Start Year: {{ $skater->synchro_start_year }}
    </div>
    <div>
        Skating Start Year: {{ $skater->skating_start_year }}
    </div>
    <div>
        Moves Test Level: {{ $skater->testlevel->test_level_name }} ({{ $skater->testlevel_id }})
    </div>
    <div>
        Notes: {{ $skater->notes }}
    </div>
    <br>
    <div>
        Last Updated {{ $skater->updated_at }}
    </div>

@stop

