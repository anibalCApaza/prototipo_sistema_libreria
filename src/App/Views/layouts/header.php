<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
        @media (max-width:767px) {
            #sidebar {
                display: none;
            }

            #nav-desktop {
                display: none;
            }
        }
    </style>
</head>

<body>

    <header>
        <nav id="nav-desktop" class="nav d-md-flex justify-content-end bg-primary">
            <?php
            if ($_SESSION['isAuth'] == 1) {
            ?>
                <a class="nav-link" href="#">
                    <button class="btn btn-info fw-bolder">
                        Usuario:
                    </button>
                </a>
            <?php
            }
            ?>
            <a class="nav-link" href="home/showLoginForm">
                <button class="btn btn-success fw-bolder">
                    Iniciar sesión
                </button>
            </a>
            <?php
            if ($_SESSION['isAuth'] == 1) {
            ?>
                <a class="nav-link" href="#">
                    <button class="btn btn-danger fw-bolder">
                        Cerrar sesión
                    </button>
                </a>
            <?php
            }
            ?>
        </nav>

        <nav id="nav-mobile" class="nav d-md-none justify-content-end bg-primary">
            <a class="nav-link" href="#">
                <button class="btn btn-info fw-bolder">
                    ☰ Menú
                </button>
            </a>
        </nav>

    </header>

    <div class="container-fluid">

        <div class="row">
            <!-- Sidebar -->

            <?php
            if ($_SESSION['isAuth'] == 1) {
            ?>
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white min-vh-100 p-3">
                    <h2 class="h4 text-primary">MENÚ</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-rose" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Láminas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Secciones</a>
                        </li>
                    </ul>
                </nav>
            <?php
            }
            ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 min-vh-100">