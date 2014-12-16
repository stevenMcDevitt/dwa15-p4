<?php

class Club extends Eloquent {

# Club HAS MANY Skaters - One-to-many relationship.

    public function skater() {
        return $this->hasMany('Skater');
    }

}
