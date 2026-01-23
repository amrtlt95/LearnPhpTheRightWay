<?php

declare(strict_types=1);

    namespace App\Models;

class UserController
{
    public function register()
    {

        session_destroy();

          echo "<pre>";
           print_r($_SESSION);
           echo "</pre>";


        return "<form method='POST' action='/handleRegister'>
                    <input type='text' name='username' placeholder='Username'/>
                    <input type='password' name='password' placeholder='Password'/>
                    <button type='submit'>Register</button>
                </form>";
    }

    public function handleRegister()
    {

        return "User 'registered successfully!";
    }
}
