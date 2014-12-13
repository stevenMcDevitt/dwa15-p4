<?php

class CompetitionLevelTableSeeder extends Seeder {

	public function run()
	{

                $complevel = Complevel::create(array(
                'competition_level_name' => "Not Specified",
                'order_level' => 0,
                'min_team_size' => 0,
                'max_team_size' => 0,
                'min_age' => 0,
                'max_age' => 0,
                'min_moves_test_level' => 0
                ));

		$complevel = Complevel::create(array(
        	'competition_level_name' => "Beginner",
        	'order_level' => 1,
        	'min_team_size' => 8,
        	'max_team_size' => 16,
        	'min_age' => 6,
        	'max_age' => 10,
        	'min_moves_test_level' => 0
		));

		$complevel = Complevel::create(array(
        	'competition_level_name' => "Preliminary",
        	'order_level' => 2,
        	'min_team_size' => 8,
        	'max_team_size' => 16,
        	'min_age' => 6,
        	'max_age' => 12,
                'min_moves_test_level' => 0
		));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Pre-Juvenile",
                'order_level' => 3,
                'min_team_size' => 8,
                'max_team_size' => 16,
                'min_age' => 6,
                'max_age' => 12,
                'min_moves_test_level' => 0
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Open Juvenile",
                'order_level' => 4,
                'min_team_size' => 8,
                'max_team_size' => 16,
                'min_age' => 6,
                'max_age' => 19,
                'min_moves_test_level' => 2
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Juvenile",
                'order_level' => 5,
                'min_team_size' => 12,
                'max_team_size' => 20,
                'min_age' => 6,
                'max_age' => 13,
                'min_moves_test_level' => 3
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Intermediate",
                'order_level' => 6,
                'min_team_size' => 12,
                'max_team_size' => 20,
                'min_age' => 6,
                'max_age' => 18,
                'min_moves_test_level' => 5
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Novice",
                'order_level' => 7,
                'min_team_size' => 12,
                'max_team_size' => 20,
                'min_age' => 12,
                'max_age' => 17,
                'min_moves_test_level' => 5
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Junior",
                'order_level' => 8,
                'min_team_size' => 12,
                'max_team_size' => 16,
                'min_age' => 12,
                'max_age' => 19,
                'min_moves_test_level' => 6
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Senior",
                'order_level' => 9,
                'min_team_size' => 16,
                'max_team_size' => 20,
                'min_age' => 14,
                'max_age' => 25,
                'min_moves_test_level' => 7
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Collegiate",
                'order_level' => 10,
                'min_team_size' => 12,
                'max_team_size' => 20,
                'min_age' => 17,
                'max_age' => 23,
                'min_moves_test_level' => 5
                ));

                $complevel = Complevel::create(array(
                'competition_level_name' => "Masters",
                'order_level' => 11,
                'min_team_size' => 12,
                'max_team_size' => 20,
                'min_age' => 25,
                'max_age' => 100,
                'min_moves_test_level' => 0
                ));
	}
}
