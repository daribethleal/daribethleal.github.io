<?php

if (isset($_POST['enviar'])) {

    if ($_POST['enviar'] == 'registerOrator') {
        if (NewOrator())
            header('Location: oradores.php');
        else
            $msj = 'Error al editar orador';
    }
}

function getOradores()
{
    require_once('config.php');
    if ($resultado = $mysqli->query("SELECT * FROM `oradores` where estado = 1 limit 6")) {
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

function NewOrator()
{
    require_once('config.php');
    if ($mysqli->query("INSERT INTO oradores (nombre, apellido,  mail, tema) VALUES ('{$_POST['nombre']}', '{$_POST['apellido']}', '{$_POST['mail']}', '{$_POST['tema']}')")) {
        return true;
    }
}
