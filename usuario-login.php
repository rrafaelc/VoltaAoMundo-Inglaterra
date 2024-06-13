<?php
include_once "classes/Usuario.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = new Usuario();

$usuario->email = $email;
$usuario->senha = $senha;

$usuario->login();

if ($usuario->isAdmin) {
	if ($usuario->email == null) {
		header('Location: usuario-erro.php');
	} else {
		session_start();
		$_SESSION['usuario'] = $usuario->email;
		header('Location: index_adm.php');
	}
} else {
	if ($usuario->email == null) {
		header('Location: usuario-erro.php');
	} else {
		session_start();
		$_SESSION['usuario'] = $usuario->email;
		header('Location: index_usu.php');
	}
}
