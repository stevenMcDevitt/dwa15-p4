<?php

class Complevel extends Eloquent {

# Complevel HAS MANY Teams - One-to-many relationship.

    public function team() {
        return $this->hasMany('Team');
	}

	public static function getComplevels() {
		
		$complevels = Array();

		$collection = Complevel::all();

		foreach($collection as $complevel) {
			$complevels[$complevel->id] = $complevel->competition_level_name;
		}
		return $complevels;
	}
}
