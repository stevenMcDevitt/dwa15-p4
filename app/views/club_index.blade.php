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
    			<th>Id</th>
    			<th>Club Name</th>
    			<th>Club Locality</th>
    			<th></th>
    			<th></th>
    		</tr>
    	</thead>

    	<tbody>

    		@foreach($clubs as $club)
    			<tr>
    				<td>{{$club->id}}</td>
    				<td>{{$club->club_name}}</td>
    				<td>{{$club->club_locality}}</td>
    				<td><a href='/club/{{$club->id}}'>Details</a></td>
    				<td>Edit</td>
    			</tr>
    		@endforeach
		</tbody>
	</table>

@stop