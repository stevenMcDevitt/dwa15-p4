<?php

class TestLevelTableSeeder extends Seeder {

	public function run()
	{

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Not Specified",
                'order_level' => 0
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "No Test",
                'order_level' => 1
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Pre-Preliminary",
                'order_level' => 2
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Preliminary",
                'order_level' => 3
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Pre-Juvenile",
                'order_level' => 4
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Juvenile",
                'order_level' => 5
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Intermediate",
                'order_level' => 6
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Novice",
                'order_level' => 7
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Junior",
                'order_level' => 8
                ));

                $testlevel = Testlevel::create(array(
                'test_level_name' => "Senior",
                'order_level' => 9
                ));

	}
}
