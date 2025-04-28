<?php

namespace app\models;

use PDO;

class Model {

    protected $db;
    protected $table;

    public function __construct() {
        // Database connection
        $this->db = new PDO('mysql:host=localhost;dbname=music', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($sql) {
        return $this->db->query($sql);
    }


}
