<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

	    Schema::create('coaches', function($table) {

        	$table->increments('id');
        	$table->timestamps();

        	$table->string('last_name');
         	$table->string('first_name');
         	$table->string('role');
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
		Schema::drop('coaches');
	}

}