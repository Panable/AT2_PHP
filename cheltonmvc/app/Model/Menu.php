<?php

namespace App\Model; // Adjust the namespace

class Menu extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getMenu()
    {
        $this->query("SELECT * FROM menu");
        return $this->resultSet();
    }
}
