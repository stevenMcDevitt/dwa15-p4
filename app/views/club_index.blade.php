@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')
	
@stop


@section('content')

    <h2>USFSA Figure Sakting Clubs</h2>
    <br>

    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Club Name</th>
    			<th>Club Locality</th>
    		</tr>
    	</thead>

    	<tbody>

    		@foreach($clubs as $club)
    			<tr>
    				<td>{{$club->id}}</td>
    				<td>{{$club->club_name}}</td>
    				<td>{{$club->club_locality}}</td>
    			</tr>
    		@endforeach
		</tbody>
	</table>

@stop