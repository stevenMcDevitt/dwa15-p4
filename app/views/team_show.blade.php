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
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="col-md-1">Id</th>
                <th class="col-md-4">Name</th>
                <th class="col-md-1">Age</th>
                <th class="col-md-2">Test Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skaters as $skater)
                <tr>
                    <td>{{ $skater->id }}</td>
                    <td>{{ $skater->last_name }}, {{ $skater->first_name }}</td>
                    <td>{{ $skater->competition_age }}</td>
                    <td>{{ $skater->testlevel->test_level_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <p class="bottom-sep"></p>
    <h2>Eligible Skaters</h2>
    <br>

@stop

