<?php

namespace App\Models;

class User
{
    protected $users = [
        'user1', 'user2', 'user3', 'user4'
    ];

    public function all()
    {
        return $this->users;
    }

    public function first()
    {
        $this->users[0];
    }

    public function get($id)
    {
        return $this->users[$id];
    }
}
