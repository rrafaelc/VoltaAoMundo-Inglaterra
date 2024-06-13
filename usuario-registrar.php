<?php

include_once "classes/Usuario.php";

$email = $_POST['email'];
$senhaLimpa = $_POST['senha'];
$senha = hash("sha256", $senhaLimpa);

$usuario = new Usuario();

$usuario->email = $email;
$usuario->senha = $senha;

$usuario->inserir();

return;

$sql = "SELECT * FROM tb_usuarios
        WHERE usuario = :user
        AND senha = :passwd";

include "classes/conexao.php";
$resultado = $conexao->prepare($sql);
$resultado->bindParam(':user', $usuario);
$resultado->bindParam(':passwd', $senha);
$linha = $resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];
$permissao = $linha['permisao'];


if ($permissao == 'adm') {
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		header('Location: usuario-erro.php');
	} else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: index_adm.php');
	}
} else {
	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		header('Location: usuario-erro.php');
	} else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: index_usu.php');
	}
}
