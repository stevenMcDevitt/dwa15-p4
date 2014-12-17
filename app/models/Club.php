<?php

class Club extends Eloquent {

# Club HAS MANY Skaters - One-to-many relationship.

    public function skater() {
        return $this->hasMany('Skater');
    }

	public static function getClubs() {
		
		$clubs = Array();

		$collection = Club::where('id','>',0)
			->orderBy('club_name')
			->get();

		foreach($collection as $club) {
			$clubs[$club->id] = $club->club_name;
		}
		return $clubs;
	}

}
