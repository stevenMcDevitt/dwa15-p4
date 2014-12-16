@extends('_master')

@section('title')
	DWA15 P4 - S2TMS
@stop

@section('head')

@stop

@section('jumbotron')
    Test Levels
@stop

@section('content')

    <table class="table table-striped table-bordered">
    	<thead>
    		<tr>
    			<th class="col-md-1">Id</th>
    			<th class="col-md-2">Test Level</th>

    		</tr>
    	</thead>
    	<tbody>
    		@foreach($testlevels as $testlevel)
    			<tr>
    				<td> {{ $testlevel->id }}</td>
    				<td> {{ $testlevel->test_level_name }} </td>
    			</tr>
    		@endforeach
		</tbody>
	</table>

@stop