<?php

namespace app\models;

class Music extends Model
{
    protected $table = 'songs';

    public function getAllMusic() {
        // Get all songs from the database
        return $this->query("SELECT * FROM " . $this->table);
    }
}
