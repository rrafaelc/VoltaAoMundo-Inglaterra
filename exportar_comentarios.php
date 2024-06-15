<?php
require_once 'usuario-verifica.php';

if (
  isset($_SESSION['usuario']) &&
  isset($_SESSION['role']) &&
  $_SESSION['role'] != 'adm'
) {
  header('Location: index_user.php');
  exit();
} else {
  include 'classes/Comentario.php';
  $comentarioClasse = new Comentario();
  $comentarios = $comentarioClasse->exportar();

  // Converter os caracteres especiais
  array_walk_recursive($comentarios, function (&$item) {
    if (is_string($item)) {
      $item = mb_convert_encoding($item, 'UTF-8', 'UTF-8');
    }
  });

  $jsonComentarios = json_encode($comentarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

  header('Content-Disposition: attachment; filename="comentarios.json"');
  header('Content-Type: application/json');
  echo $jsonComentarios;
  exit();
}
