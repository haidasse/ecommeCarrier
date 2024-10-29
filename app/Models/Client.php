<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends User
{
    private $fillabel=[
        "name",
        "email",
        "password",
        "commpany",
        "profission"
    ];
}
