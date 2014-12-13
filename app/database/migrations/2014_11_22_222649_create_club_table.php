<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		    Schema::create('clubs', function($table) {

        	$table->increments('id')->unsigned();

        	$table->string('club_name');
        	$table->string('club_locality');

        	$table->string('club_address1');
        	$table->string('club_address2');
        	$table->string('club_city');
        	$table->string('club_state');
        	$table->string('club_zip');

        	$table->string('club_website');

        	$table->timestamps();
    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clubs');
	}

}
