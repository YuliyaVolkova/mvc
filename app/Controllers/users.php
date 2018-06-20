<?php

namespace App\Controllers;

use App\Core\MainController;

class Users extends MainController
{
    public function index()
    {
        echo 'Users index';
    }

    public function create()
    {
        echo 'Users new create interface';
    }
}
