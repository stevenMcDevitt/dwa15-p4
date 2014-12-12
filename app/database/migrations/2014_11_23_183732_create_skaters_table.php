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
