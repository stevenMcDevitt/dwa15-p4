<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TestLevelTableSeeder');
		$this->call('CompetitionLevelTableSeeder');
		$this->call('ClubTableSeeder');
		$this->call('SkaterTableSeeder');

	}

}
