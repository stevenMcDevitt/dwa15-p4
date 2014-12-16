<?php

class Team extends Eloquent {

# Team HAS MANY Skaters - One-to-many relationship.

    public function skater() {
        return $this->hasMany('Skater');
    }

# Team BELONGS TO CompLevel - Inverse one-to-many relationship

    public function complevel() {
        return $this->belongsTo('Complevel');
    }

}
