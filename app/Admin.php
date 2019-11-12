<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'users';

    public function checkRole() {
        if ($this["userRights"] === "1") {
            return "admin";
        } elseif($this["email_verified_at"] != null) {
            return "user";
        } else {
            return "guest";
        }
    }

    public function makeAdmin()
    {
        if ($this->userRights === NULL) {
            $this->userRights = 1;
        } else {
            $this->userRights = 0;
        };
    }
}
