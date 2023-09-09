<?php

namespace App\Controller;

use App\Model;
use App\View;

class Menu extends Controller
{

    public function __construct()
    {
        $this->model = new Model\Menu();
        $this->index();
    }

    public function index()
    {
        $data = $this->model->getMenu();
        $view = new View\Menu($data);
        $view->Render();
    }
}
