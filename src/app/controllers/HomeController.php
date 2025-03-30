<?php

namespace System\App\Controllers;

use System\App\Views\View;

class HomeController
{

    public function index()
    {
        View::render('home/index');
    }
}
