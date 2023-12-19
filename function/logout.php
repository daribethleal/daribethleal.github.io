<?php
    ob_start();
    session_start();

    // limpiar la variable de sesión y redireccionar
    unset($_SESSION['user']);
    header('Location: ../');
