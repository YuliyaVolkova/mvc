<?php

namespace App\Core;

use App\Core\View;

class MainController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        echo 'root defaultPage ';
    }
}
