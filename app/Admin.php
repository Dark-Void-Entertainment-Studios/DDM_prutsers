<?php

namespace App;

use App\User;

class Admin extends User
{
    protected $table = "users";

    public function makeAdmin()
    {
        if ($this->role_id == 2) {
            $this->role_id = 1;
        } else {
            $this->role_id = 2;
        };
    }
}
