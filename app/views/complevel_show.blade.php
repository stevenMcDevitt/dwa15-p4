@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Competion Level
@stop

@section('content')
    
    <h2>Competition Level Details</h2>
	<br>
    <div>
        ID: {{ $complevel->id }}
    </div>
    <div>
        Name: {{ $complevel->competition_level_name }}
    </div>
    <div>
        Minimum Team Size: {{ $complevel->min_team_size }}
    </div>
    <div>
        Maximum Team Size: {{ $complevel->max_team_size }}
    </div>
    <div>
        Minimum Skater Age: {{ $complevel->min_age }}
    </div>
    <div>
        Maximum Skater Age: {{ $complevel->max_age }}
    </div>
    <div>
        Minimum Moves Test Level: {{ $complevel->min_mives_test_level}}
    </div>
    <div>
        Last Updated {{ $complevel->updated_at }}
    </div>

@stop

