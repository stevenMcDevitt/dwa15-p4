<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		    Schema::create('complevels', function($table) {

        	$table->increments('id')->unsigned();

        	$table->string('competition_level_name');
        	$table->integer('order_level');
        	$table->integer('min_team_size');
        	$table->integer('max_team_size');
        	$table->integer('min_age');
        	$table->integer('max_age');
        	$table->integer('min_moves_test_level');

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
		Schema::drop('complevels');
	}

}
