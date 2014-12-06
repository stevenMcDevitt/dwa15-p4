<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		    Schema::create('edlevels', function($table) {

        	$table->increments('id')->unsigned();

        	$table->string('education_level_name');
        	$table->integer('education_category_ordinal');

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
		Schema::drop('edlevels');
	}

}
