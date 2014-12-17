<?php

class Testlevel extends Eloquent {

# Testlevel HAS MANY Skaters - One-to-many relationship.

    public function skater() {
        return $this->hasMany('Skater');
    }

	public static function getTestlevels() {
		
		$testlevels = Array();

		$collection = Testlevel::all();

		foreach($collection as $testlevel) {
			$testlevels[$testlevel->id] = $testlevel->test_level_name;
		}
		return $testlevels;
	}

}
