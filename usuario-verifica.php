<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: usuario-nao-logado.php');
}
