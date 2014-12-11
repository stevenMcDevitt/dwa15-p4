@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skating Clubs
@stop

@section('content')
    <h3><a href='/club/create'>+Add a New Club</a></h3>
    <br>
    <p class="bottom-sep"></p>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th class="col-md-1">Id</th>
    			<th class="col-md-4">Club Name</th>
    			<th class="col-md-4">Club Locality</th>
    			<th class="col-md-1"></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($clubs as $club)
    			<tr>
    				<td>{{$club->id}}</td>
    				<td>{{$club->club_name}}</td>
    				<td>{{$club->club_locality}}</td>
    				<td><a href='/club/{{$club->id}}'>Details</a><br>
    				    <a href='/club/{{$club->id}}/edit'>Edit</a>
                        {{ Form::open(['method' => 'DELETE', 'action' => ['ClubController@destroy', $club->id]]) }}
                            <a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
                        {{ Form::close() }}
                    </td>
    			</tr>
    		@endforeach
		</tbody>
	</table>
    <p class="bottom-sep"></p>
    <h3><a href='/club/create'>+Add a New Club</a></h3>

@stop