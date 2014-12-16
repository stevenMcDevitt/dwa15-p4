@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Test Level
@stop

@section('content')
    
    <h2>Test Level Details</h2>
	<br>
    <div>
        ID: {{ $testlevel->id }}
    </div>
    <div>
        Name: {{ $testlevel->test_level_name }}
    </div>
    <div>
        Last Updated {{ $complevel->updated_at }}
    </div>

@stop

