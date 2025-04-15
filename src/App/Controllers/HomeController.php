<?php

namespace System\App\Controllers;

use System\App\Models\User;
use System\App\Views\View;

class HomeController extends Controller
{
    public function index()
    {
        echo $this->view->render('home/index');
    }

    public function login()
    {
        if (isset($_POST['name'], $_POST['password'])) {
            $user = new User();
            $result = $user->getByName($_POST['name']);

            if (count($result) == 1) {
                $userData = $result[0];

                if (password_verify($_POST['password'], $userData['password'])) {
                    $_SESSION['name'] = $userData['name'];
                    $_SESSION['password'] = $userData['password'];

                    var_dump($_SESSION);
                } else {
                    header("Location: showLoginForm");
                    exit();
                }
            } else {
                header("Location: showLoginForm");
                exit();
            }
        } else {
            header("Location: showLoginForm");
            exit();
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header("Location: /login");
        exit();
    }

    public function showLoginForm()
    {
        echo $this->view->render('home/loginForm');
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
