<?php

    require_once('config.php');

    $msg = '';

    if (isset($_POST['enviar']) && !empty($_POST['user']) && !empty($_POST['password'])) {
        if ($resultado = $mysqli->query("SELECT * FROM user WHERE usuario = '{$_POST['user']}' AND password = '{$_POST['password']}'")) {
            
            if ($resultado->num_rows > 0) {
                $row = $resultado->fetch_array(MYSQLI_ASSOC);
                $_SESSION['user'] = $row;
                header('Location: index.php');
            } else {
                $msg = 'Usuario o contraseña incorrecta';
            }
            
            // printf("La selección devolvió %d filas.\n", );

            // /* liberar el conjunto de resultados */
            // $resultado->close();
        }
    } else {
        // $msg = 'Usuario o contraseña incorrecta';
    }
