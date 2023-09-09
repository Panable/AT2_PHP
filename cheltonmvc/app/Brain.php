<?php

namespace App;

use App\Controller;

class Brain
{
    function __construct()
    {
        LoadMenu();
    }
}

function LoadMenu()
{
    $controller = new Controller\Menu();
}
