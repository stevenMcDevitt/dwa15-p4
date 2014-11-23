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

        	$table->increments('id');
        	$table->timestamps();

        	$table->string('last_name');
        	$table->string('firt_name');
        	$table->integer('date_of_birth');
        	$table->string('moves_test_level');
        	$table->string('freestyle_test_level');
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
		Schema::drop('skaters');
	}

}
