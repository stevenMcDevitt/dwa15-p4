<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestLevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		    Schema::create('testlevels', function($table) {

        	$table->increments('id')->unsigned();
        	$table->string('test_level_name');
        	$table->integer('order_level');

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
		Schema::drop('testlevels');
	}

}
