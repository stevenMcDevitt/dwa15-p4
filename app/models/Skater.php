<?php

class Skater extends Eloquent {

# Skater BELONGS TO Team - Inverse one-to-many relationship

    public function team() {
        return $this->belongsTo('Team');
    }

# Skater BELONGS TO Club - Inverse one-to-many relationship

    public function club() {
        return $this->belongsTo('Club');
    }

# Skater BELONGS TO TestLevel - Inverse one-to-many relationship

    public function testlevel() {
        return $this->belongsTo('Testlevel');
    }

    
	public static function getTeamSkaters($id) {

		$skaters = skater::where('team_id','=',$id)
			->orderBy('last_name','ASC')
			->orderBy('first_name', 'ASC')
			->get();

		return $skaters;
	}

}
