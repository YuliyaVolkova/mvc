<?php

namespace App\Controllers;

use App\Core\MainController;
use App\Models\User;

class Posts extends MainController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->all();
        $moreData = 'Случайная строка';
        $this->view->render('posts', [
            'allUsers' => $users,
            'moreData' => $moreData
        ]);
    }
}
