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
        	$table->timestamps();

        	$table->string('last_name');
        	$table->string('first_name');
        	$table->date('date_of_birth');
        	$table->string('moves_test_level')->nullable;
        	$table->string('freestyle_test_level')->nullable;

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