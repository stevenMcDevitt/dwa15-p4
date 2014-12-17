@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Figure Skating Teams
@stop

@section('content')
    <h3><a href='/team/create'>+Add a New Team</a></h3>
    <br>
    <p class="bottom-sep"></p>
    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th class="col-md-1">Id</th>
    			<th class="col-md-4">Name</th>
    			<th class="col-md-4">Competition Level</th>
    			<th class="col-md-1"></th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($teams as $team)
    			<tr>
    				<td> {{ $team->id }} </td>
    				<td> {{ $team->team_name }} </td>
    				<td> {{ $team->complevel->competition_level_name }} </td>
    				<td> <a href='/team/{{$team->id }} '>Details</a><br>
    				     <a href='/team/{{$team->id}}/edit'>Edit</a>
                         {{ Form::open(['method' => 'DELETE', 'action' => ['TeamController@destroy', $team->id]]) }}
                            <a href='javascript:void(0)' onClick='parentNode.submit();return false;'>Delete</a>
                        {{ Form::close() }}
                    </td>
    			</tr>
    		@endforeach
		</tbody>
	</table>
    <p class="bottom-sep"></p>
    <h3><a href='/club/create'>+Add a New Team</a></h3>

@stop