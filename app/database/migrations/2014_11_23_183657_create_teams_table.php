<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	    Schema::create('teams', function($table) {

        	$table->increments('id');
        	$table->timestamps();

        	$table->string('team_name');
        	$table->string('competition_level');
         	$table->string('test_column');

    	});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teams');
	}

}
