<?php

class SkaterTableSeeder extends Seeder {

	public function run()
	{

		$skater = Skater::create(array(
			'first_name' => 'Madison',
			'last_name' => 'Jones',
			'date_of_birth' => '2005-11-04'
		));

		$skater = Skater::create(array(
			'first_name' => 'Diane',
			'last_name' => 'Bernard',
			'date_of_birth' => '2004-11-02',
			'team_id' => '1',
			'club_id' => '1',
			'testlevel_id' => '1'
		));

		$skater = Skater::create(array(
			'first_name' => 'Ann',
			'last_name' => 'Bertrand',
			'date_of_birth' => '1999-10-29',
			'team_id' => '1',
			'club_id' => '1',
			'testlevel_id' => '1'
		));

		$skater = Skater::create(array(
			'first_name' => 'Shirley',
			'last_name' => 'Rolland',
			'date_of_birth' => '1994-02-15',
			'team_id' => '1',
			'club_id' => '1',
			'testlevel_id' => '1'
		));

		$skater = Skater::create(array(
			'first_name' => 'Karen',
			'last_name' => 'Ross',
			'date_of_birth' => '2005-06-02',
			'team_id' => '1',
			'club_id' => '1',
			'testlevel_id' => '1'
		));

		$skater = Skater::create(array(
			'first_name' => 'Grace',
			'last_name' => 'Rousseau',
			'date_of_birth' => '2005-08-26',
			'team_id' => '1',
			'club_id' => '1',
			'testlevel_id' => '1'
		));


	}
}

