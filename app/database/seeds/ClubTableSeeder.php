<?php

class ClubTableSeeder extends Seeder {

        public function run()
	{

		$club = Club::create(array(
                        'club_name' => 'Hayden Figure Skating Club',
                        'club_locality' => 'Lexington, MA'
		));

                $club = Club::create(array(
                        'club_name' => 'Colonial Skating Club',
                        'club_locality' => 'Acton, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Skating Club of Boston',
                        'club_locality' => 'Boston, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Commonwealth Figure Skating Club',
                        'club_locality' => 'Randolph, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Northstar Figure Skating Club',
                        'club_locality' => 'Westborough, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Peabody Figure Skating Club',
                        'club_locality' => 'Peabody, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Wilmington Figure Skating Club',
                        'club_locality' => 'Wilmington, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Pilgrim Figure Skating Club',
                        'club_locality' => 'Pembroke, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Wallace Figure Skating Club',
                        'club_locality' => 'Fitchburg, MA'
                ));

                $club = Club::create(array(
                        'club_name' => 'Bourne Figure Skating Club',
                        'club_locality' => 'Buzzards Bay, MA'
                ));
	}
}
