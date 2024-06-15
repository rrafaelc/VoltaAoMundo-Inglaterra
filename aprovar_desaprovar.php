<?php
require_once 'classes/Comentario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $acao = $_POST['acao'];

  $comentario = new Comentario($id);
  if ($acao === 'aprovar') {
    $comentario->aprovarDesaprovar(true);
  } else if ($acao === 'rejeitar') {
    $comentario->aprovarDesaprovar(false);
  }

  echo json_encode(['status' => 'success']);
}
