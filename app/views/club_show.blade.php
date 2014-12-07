@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    USFSA Figure Sakting Clubs
@stop

@section('content')
	<br>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th>Label</th>
    			<th>Value</th>
    		</tr>
    	</thead>

    	<tbody>
    			<tr>
    				<td>ID</td>
    				<td>{{ $club->id }}</td>
    			</tr>
    			<tr>
    				<td>Name</td>
    				<td>{{ $club->club_name }}</td>
    			</tr>
    			<tr>
    				<td>Locality</td>
    				<td>{{ $club->club_locality }}</td>
    			</tr>
		</tbody>
	</table>

@stop

