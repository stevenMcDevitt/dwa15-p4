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

		$this->call('SkaterTableSeeder');
		$this->call('CompetitionTableSeeder');
		$this->call('ClubTableSeeder');

	}

}
