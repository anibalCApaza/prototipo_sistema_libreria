<?php

namespace System\App\Controllers;

use System\App\Views\View;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}
