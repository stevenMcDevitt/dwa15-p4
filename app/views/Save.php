    <table>
        <thead>
            <tr>
                <th class="col-md-2"></th>
                <th class="col-md-7"></th>
            </tr>
        </thead>
    	<tbody>
    			<tr>
    				<td> ID: </td>
    				<td> {{ $club->id }} </td>
    			</tr>
    			<tr>
                    <td> {{ Form::label('club_name', 'Name'); }} </td>
                    <td> {{ Form::text('club_name', $club['club_name'], array('size' => '50', 'placeholder' => 'Club Name')); }} </td>
    			</tr>
    			<tr>
                    <td> {{ Form::label('club_locality', 'Locality'); }} </td>
                    <td> {{ Form::text('club_locality', $club['club_locality'], array('size' => '50', 'placeholder' => 'Club Locality')); }} </td>
    			</tr>
                <tr>
                    <td> {{ Form::label('club_address1', 'Address'); }} </td>
                    <td> {{ Form::text('club_address1', $club['club_address1'], array('size' => '50', 'placeholder' => 'Address 1')); }} </td>
                </tr>
                <tr>
                    <td></td>
                    <td> {{ Form::text('club_address2', $club['club_address2'], array('size' => '50', 'placeholder' => 'Address 2')); }} </td>
                </tr>
                <tr>
                    <td></td>
                    <td> {{ Form::text('club_city', $club['club_city'], array('size' => '50', 'placeholder' => 'City')); }} </td>
                    <td> {{ Form::text('club_state', $club['club_state'], array('size' => '6', 'placeholder' => 'State')); }} </td>
                    <td> {{ Form::text('club_zip', $club['club_zip'], array('size' => '6', 'placeholder' => 'Zip')); }} </td>
                </tr>
                <tr>
                    <td> {{ Form::label('club_website', 'Club Website'); }} </td>
                    <td> {{ Form::text('club_website', $club['club_website'], array('size' => '50')); }} </td>
                </tr>
		</tbody>
	</table>
    <br>



    <div>
        {{ Form::label('club_name', 'Club Name') }}
        {{ Form::text('club_name', array('size' => '50', 'placeholder' => 'Club Name')) }}
    </div>
    <div>
        {{ Form::label('club_locality', 'Club Locality') }}
        {{ Form::text('club_locality', array('size' => '50', 'placeholder' => 'Club Locality')) }}
    </div>

        <div>
        {{ Form::label('club_address1', 'Address'); }}
        {{ Form::text('club_address1', array('size' => '65', 'placeholder' => 'Address 1')); }}
    </div>
    <div>
        {{ Form::label('club_address1',' '); }}
        {{ Form::text('club_address2', array('size' => '65', 'placeholder' => 'Address 2')); }}
    </div>
    <div>
        {{ Form::label('club_city',' '); }}
        {{ Form::text('club_city', array('size' => '35', 'placeholder' => 'City')); }}
        {{ Form::text('club_state', array('size' => '6', 'placeholder' => 'State')); }}
        {{ Form::text('club_zip', array('size' => '6', 'placeholder' => 'Zip')); }}
    </div>
    <div>
        {{ Form::label('club_website', 'Club Website'); }}
        {{ Form::text('club_website', array('size' => '65')); }}
    </div>

    