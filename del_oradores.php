<?php
require_once('./layout/header.php');
require_once('./function/oradores.php');

if (DeleteOrator($_GET['id'])) {
    header('Location: oradores.php');
}

?>
