<?php

namespace System\App\Controllers;

use System\App\Models\User;
use System\App\Views\View;

class SessionController
{
    public function login()
    {
        if (isset($_POST['user'], $_POST['password'])) {

            $user = new User();
            var_dump($user->getAll());
            $password = password_hash('13734487', PASSWORD_BCRYPT);
            var_dump($password);
            echo "<br> OWO";
            var_dump(password_verify('13734487', $password));
        } else {
            echo 'no existen';
        }
    }

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
        View::render('session/form');
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
