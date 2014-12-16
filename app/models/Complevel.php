<?php

class Complevel extends Eloquent {

# Complevel HAS MANY Teams - One-to-many relationship.

    public function team() {
        return $this->hasMany('Team');
	}

}
