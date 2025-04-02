<?php

namespace System\App\Views;


class View
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../src/App/Views/');
        $this->twig = new \Twig\Environment($loader, [
            'cache' => false, #DESACTIVAR EN PRODUCCIÓN
        ]);
    }

    public function render($template, $data = [])
    {
        return $this->twig->render($template, $data);
    }
}
