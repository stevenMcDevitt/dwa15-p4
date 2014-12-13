@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Competition Levels
@stop

@section('content')

    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th class="col-md-1">Id</th>
    			<th class="col-md-2">Name</th>
                <th class="col-md-1">Min Team Size</th>
    			<th class="col-md-1">Max Team Size</th>
                <th class="col-md-1">Min Skater Age</th>
                <th class="col-md-1">Max Skater Age</th>
                <th class="col-md-1">Min Moves Test Level</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($complevels as $complevel)
    			<tr>
    				<td> {{ $complevel->id }}</td>
    				<td> {{ $complevel->competition_level_name }} </td>
                    <td> {{ $complevel->min_team_size }} </td>
                    <td> {{ $complevel->max_team_size }} </td>
                    <td> {{ $complevel->min_age }} </td>
                    <td> {{ $complevel->max_age }} </td>
                    <td> {{ $complevel->min_moves_test_level }} </td>
    			</tr>
    		@endforeach
		</tbody>
	</table>

@stop