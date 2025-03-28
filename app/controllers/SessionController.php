<?php

class SessionController
{
    public function login() {}

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header("Location: /login");
        exit();
    }

    public function showLoginForm()
    {
        require_once '../app/views/Session/form.php';
    }

    public static function checkAuth()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }
    }
}
