<?php

namespace App;

use App\Controller;

class Brain
{
    function __construct()
    {
        $this->LoadMenu();
    }
    public function LoadMenu()
    {
        $controller = new Controller\Menu();
    }
}
