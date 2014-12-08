@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    List of Skaters
@stop

@section('content')
	<br>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th>Id</th>
    			<th>Last Name</th>
    			<th>First Name</th>
    			<th></th>
    			<th></th>
    		</tr>
    	</thead>

    	<tbody>

    		@foreach($skaters as $skater)
    			<tr>
    				<td>{{$skater->id}}</td>
    				<td>{{$skater->last_name}}</td>
    				<td>{{$skater->first_name}}</td>
    				<td><a href='/skater/{{$skater->id}}'>Details</a></td>
    				<td>Edit</td>
    			</tr>
    		@endforeach
		</tbody>
	</table>

@stop