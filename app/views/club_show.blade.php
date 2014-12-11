@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Club Details
@stop

@section('content')
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


    <table class="table">
    	<tbody>
    			<tr>
    				<td>ID</td>
    				<td> {{ $club->id }} </td>
    			</tr>
    			<tr>
    				<td>Name</td>
    				<td> {{ $club->club_name }} </td>
    			</tr>
    			<tr>
    				<td>Locality</td>
    				<td> {{ $club->club_locality }} </td>
    			</tr>
    			<tr>
    				<td> </td>
    				<td> </td>
    			</tr>
    			<tr>
    				<td>Club Address</td>
    				<td> {{ $club->club_address1 }} </td>
    			</tr>
    			<tr>
    				<td> </td>
    				<td> {{ $club->club_city }} {{ $club->club_state }} {{ $club->club_zip }} </td>
    			</tr>
    			<tr>
    				<td> </td>
    				<td> </td>
    			</tr>
       			<tr>
    				<td>Club Website</td>
    				<td> {{ $club->club_website }} </td>
    			</tr>
    			<tr>
    				<td> </td>
    				<td> </td>
    			</tr>
       			<tr>
    				<td>Last Updated</td>
    				<td> {{ $club->updated_at }} </td>
    			</tr> 			
		</tbody>
	</table>

@stop

