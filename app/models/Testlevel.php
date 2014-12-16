<?php

class Testlevel extends Eloquent {

# Testlevel HAS MANY Skaters - One-to-many relationship.

    public function skater() {
        return $this->hasMany('Skater');
    }

}
