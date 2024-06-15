<?php

include_once "classes/Usuario.php";

$email = $_POST['email'];
$senhaLimpa = $_POST['senha'];
$senha = hash("sha256", $senhaLimpa);

$usuario = new Usuario();

$usuario->email = $email;
$usuario->senha = $senha;

$usuario->inserir();
