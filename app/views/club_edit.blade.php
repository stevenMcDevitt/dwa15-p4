@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Club Edit
@stop

@section('content')
	
    {{ Form::model($club, ['method' => 'put',
                           'action' => ['ClubController@update', $club->id]]) }}

    <table class="table">
    	<tbody>
    			<tr>
    				<td> {{ Form::label('id', 'ID'); }} </td>
    				<td> {{ Form::text('id', $club['id']); }} </td>
    			</tr>
    			<tr>
                    <td> {{ Form::label('club_name', 'Name'); }} </td>
                    <td> {{ Form::text('club_name', $club['club_name']); }} </td>
    			</tr>
    			<tr>
                    <td> {{ Form::label('club_locality', 'Locality'); }} </td>
                    <td> {{ Form::text('club_locality', $club['club_locality']); }} </td>
    			</tr>

		</tbody>
	</table>

    {{ Form::submit('Update'); }}

    {{ Form::close(); }}

@stop

