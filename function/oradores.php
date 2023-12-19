<?php


if (isset($_POST['enviar'])) 
{    
    if ($_POST['enviar'] == 'registerOrator') {
        
    }

    if ($_POST['enviar'] == 'EditOrador') 
    {
        if (EditOrator())
            header('Location: oradores.php');
        else 
            $msj = 'Error al editar orador';
    }
}

function getOradores()
{
    require_once('config.php');
    if ($resultado = $mysqli->query("SELECT * FROM oradores")) {
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

function getOradoresById()
{
    require_once('config.php');
    if ($resultado = $mysqli->query("SELECT * FROM oradores where id_orador = {$_GET['id']}")) {
        return $resultado->fetch_array(MYSQLI_ASSOC);
    }
}

function EditOrator() 
{
    require_once('config.php');
    $tags = implode('|', array_keys($_POST['Tags']));
    if ($mysqli->query("UPDATE oradores SET nombre = '{$_POST['nombre']}', apellido = '{$_POST['apellido']}', tags = '{$tags}', mail = '{$_POST['mail']}', tema = '{$_POST['tema']}', estado = 1 WHERE id_orador = '{$_POST['id_orador']}'")) {
        return true;
    }
}

function DeleteOrator($id)
{
    require_once('config.php');
    if ($mysqli->query("DELETE FROM oradores WHERE id_orador = '{$id}'")) {
        return true;
    }
}
