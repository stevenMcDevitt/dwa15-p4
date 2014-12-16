<?php

class TeamTableSeeder extends Seeder {

        public function run()
	{

                $team = Team::create(array(
                        'team_name'     => 'Not Specified',
                        'complevel_id'  => '1'
                ));

	}
}
