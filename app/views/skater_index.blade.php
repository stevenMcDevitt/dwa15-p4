@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Team Skaters
@stop

@section('content')
    <h3><a href='/skater/create'>+Add a New Skater</a></h3>
    <br>
    <p class="bottom-sep"></p>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th class="col-md-1">Id</th>
    			<th class="col-md-4">Name</th>
                <th class="col-md-3">Age</th>
    			<th class="col-md-1"></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($skaters as $skater)
    			<tr>
    				<td>{{$skater->id}}</td>
    				<td>{{$skater->last_name}}, {{$skater->first_name}}</td>
                    <td>{{$skater->competition_age}}</td>
    				<td><a href='/skater/{{$skater->id}}'>Details</a>
    				    <a href='/skater/{{$skater->id}}/edit'>Edit</a>
                    </td>
    			</tr>
    		@endforeach
		</tbody>
	</table>
    <p class="bottom-sep"></p>
    <h3><a href='/skater/create'>+Add a New Skater</a></h3>

@stop