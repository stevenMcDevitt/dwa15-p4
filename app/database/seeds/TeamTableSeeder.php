<?php

class TeamTableSeeder extends Seeder {

        public function run()
	{

                $team = Team::create(array(
                        'team_name'     => 'Not Specified',
                        'display_order' => '0',
                        'complevel_id'  => '1'
                ));

	}
}
