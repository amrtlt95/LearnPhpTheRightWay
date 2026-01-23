<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class UserController
{
    public function register()
    {

        return View::make("Users/register");
    }

    public function handleRegister()
    {

        return View::make("Users/handleRegister");
    }
}
