<?php
require_once 'usuario-verifica.php';
include 'classes/Comentario.php';

if (
  !isset($_SESSION['usuario']) ||
  !isset($_SESSION['role']) ||
  $_SESSION['role'] != 'adm'
) {
  header('Location: index_user.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_FILES['jsonFile']) && $_FILES['jsonFile']['error'] == UPLOAD_ERR_OK) {
    $jsonFile = $_FILES['jsonFile']['tmp_name'];
    $jsonData = file_get_contents($jsonFile);
    $comentarios = json_decode($jsonData, true);

    // Verificação de todos os itens antes de salvar no banco de dados
    if (is_array($comentarios)) {
      $valid = true;
      foreach ($comentarios as $comentario) {
        if (
          !isset($comentario['nome']) ||
          !isset($comentario['email']) ||
          !isset($comentario['comentario'])
        ) {
          $valid = false;
          break;
        }
      }

      if ($valid) {
        $comentarioClasse = new Comentario();

        foreach ($comentarios as $comentario) {
          $comentarioClasse->nome = $comentario['nome'];
          $comentarioClasse->email = $comentario['email'];
          $comentarioClasse->comentario = $comentario['comentario'];
          $comentarioClasse->inserir();
        }

        echo '<script>alert("Comentários importados com sucesso!"); window.location.href="index_adm.php";</script>';
      } else {
        echo '<script>alert("Arquivo JSON contém dados inválidos."); window.location.href="index_adm.php";</script>';
      }
    } else {
      echo '<script>alert("Arquivo JSON inválido."); window.location.href="index_adm.php";</script>';
    }
  } else {
    echo '<script>alert("Erro no upload do arquivo."); window.location.href="index_adm.php";</script>';
  }
}
