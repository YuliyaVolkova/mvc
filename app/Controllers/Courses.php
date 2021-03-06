<?php

namespace App\Controllers;

use App\Core\MainController;
use App\Models\User;

class Courses extends MainController
{
    public function php()
    {
        echo "We are learning PHP";
    }

    public function index()
    {
        $userModel = new User();
        $users = $userModel->all();
        $data['allUsers'] = $users;
        $data['moreData'] = 'moreData: more info...';
        $this->view->render('courseUsers', $data);
    }
    public function env()
    {
        echo MODE;
        echo getenv('DB_HOST');
    }
}
