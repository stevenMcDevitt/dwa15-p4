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
        	$table->integer('complevel_id')->unsigned()->default(1);
        	$table->text('program_notes');
        	$table->text('competition_schedule');

        	$table->timestamps();

        	$table->foreign('complevel_id')->references('id')->on('complevels');
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
