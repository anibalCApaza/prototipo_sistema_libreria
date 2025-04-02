<?php

namespace System\App\Views;

class View
{
    public static function render(string $viewName, array $data = [])
    {
        require_once VIEWS_DIR . $viewName . '.php';
    }
}
