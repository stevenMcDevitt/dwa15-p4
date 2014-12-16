<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

         DB::unprepared('
         	CREATE TRIGGER tr_skater_age_ins BEFORE INSERT ON `skaters` FOR EACH ROW
            	BEGIN
            		SET NEW.competition_age = (DATEDIFF("2015-07-01",NEW.date_of_birth)/365);
				END
		');

         DB::unprepared('
         	CREATE TRIGGER tr_skater_age_upd BEFORE UPDATE ON `skaters` FOR EACH ROW
            	BEGIN
            		SET NEW.competition_age = (DATEDIFF("2015-07-01",NEW.date_of_birth)/365);
				END
		');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::unprepared('DROP TRIGGER `tr_skater_age_ins`');

		DB::unprepared('DROP TRIGGER `tr_skater_age_upd`');
	}

}
