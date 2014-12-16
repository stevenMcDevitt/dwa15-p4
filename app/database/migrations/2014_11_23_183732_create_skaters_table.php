<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

    	Schema::create('skaters', function($table) {

        	$table->increments('id')->unsigned();

        	$table->integer('team_id')->unsigned()->default(1);
        	$table->integer('club_id')->unsigned()->default(1);
        	$table->integer('testlevel_id')->unsigned()->default(1);

        	$table->string('last_name');
        	$table->string('first_name');
        	$table->date('date_of_birth');
        	$table->float('competition_age');
        	$table->string('usfsa_id');
        	$table->string('synchro_start_year');
        	$table->string('skating_start_year');
        	$table->string('moves_test_level')->nullable;
        	$table->string('freestyle_test_level')->nullable;
        	$table->string('email');
        	$table->text('notes');

        	$table->timestamps();

        	$table->foreign('team_id')->references('id')->on('teams');
        	$table->foreign('club_id')->references('id')->on('clubs');
        	$table->foreign('testlevel_id')->references('id')->on('testlevels');

    	});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skaters');
	}

}
