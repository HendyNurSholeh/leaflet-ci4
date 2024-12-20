<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function inputLocation(): string
    {
        return view('input-location');
    }

    public function doubleInputLocation(): string
    {
        return view('double-input-location');
    }

}
