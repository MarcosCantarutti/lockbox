<?php

namespace App\Controller;

class RegisterController
{
    public function index()
    {
        return view('registrar');
    }

    public function register()
    {
        echo 'register.register';
    }
}
