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

        	$table->increments('id')->unsigned();

        	$table->string('team_name');
        	$table->string('competition_level');
        	$table->integer('minimum_team_size');
        	$table->integer('maximum_team_size');

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
		Schema::drop('teams');
	}

}
