<?php

require_once '../app/views/layouts/header.php';

?>
<h1 class="mt-4">Inicio de Sesión</h1>
<p>Ingrese sus credenciales correctamente.</p>

<div class="card">
    <form action="session/validateLogin" method="POST">
        <div class="form-group my-3 mx-3">
            <label for="user">Usuario</label>
            <input type="text" name="user" class="form-control" placeholder="Ingrese su usuario">
        </div>

        <div class="form-group my-3 mx-3">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
        </div>

        <div class="d-flex justify-content-center my-3 mx-3">
            <button type="submit" class="btn btn-primary ">Ingresar</button>
        </div>
    </form>
</div>



<?php
require_once '../app/views/layouts/footer.php';
