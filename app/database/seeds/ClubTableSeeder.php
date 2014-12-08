<?php

class ClubTableSeeder extends Seeder {

        public function run()
	{

		$club = Club::create(array(
                        'club_name'     => 'Hayden Figure Skating Club',
                        'club_locality' => 'Lexington, MA',
                        'club_address1' => '24 Lincoln St',
                        'club_address2' => 'Suite 12',
                        'club_city'     => 'Lexington',
                        'club_state'    => 'MA',
                        'club_zip'      => '02421',
                        'club_website'  => 'www.hwhayden.org'
		));

                $club = Club::create(array(
                        'club_name'     => 'Colonial Skating Club',
                        'club_locality' => 'Boxborough, MA',
                        'club_address1' => '34 Massachusetts Ave',
                        'club_address2' => '',
                        'club_city'     => 'Boxborough',
                        'club_state'    => 'MA',
                        'club_zip'      => '01719',
                        'club_website'  => 'www.colonialfsc.org'
                ));

                $club = Club::create(array(
                        'club_name'     => 'Skating Club of Boston',
                        'club_locality' => 'Boston, MA',
                        'club_address1' => '1240 Soldiers Field Rd',
                        'club_address2' => '',
                        'club_city'     => 'Brighton',
                        'club_state'    => 'MA',
                        'club_zip'      => '02135',
                        'club_website'  => 'www.scboston.org'
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
