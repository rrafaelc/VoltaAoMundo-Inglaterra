<?php
class Usuario
{
  public $id;
  public $email;
  public $senha;
  public $isAdmin = false;

  public function __construct($id = false)
  {
    if ($id) {
      $this->id = $id;
      $this->carregar();
    }
  }

  public function inserir()
  {
    include "conexao.php";

    $sql = "INSERT INTO tb_usuario (email, senha, isAdmin) VALUES (:email, :senha, :isAdmin)";

    if ($this->contarUsuarios() == 0) {
      $this->isAdmin = true;
    }

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':email', $this->email);
    $resultado->bindParam(':senha', $this->senha);
    $resultado->bindParam(':isAdmin', $this->isAdmin);
    $resultado->execute();
  }

  public function login()
  {
    include "classes/conexao.php";

    $senha = hash("sha256", $this->senha);

    $sql = "SELECT * FROM tb_usuario
        WHERE email = :email
        AND senha = :senha";

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':email', $this->email);
    $resultado->bindParam(':senha', $senha);
    $linha = $resultado->execute();

    $linha = $resultado->fetch();
    $this->email = $linha['email'];
    $this->senha = $linha['senha'];
    $this->isAdmin = $linha['isAdmin'];
  }

  public function excluir()
  {
    $sql = "DELETE FROM tb_usuario WHERE id=" . $this->id;

    include "conexao.php";

    $conexao->exec($sql);
  }

  public function carregar()
  {
    $sql = "SELECT * FROM tb_usuario WHERE id=" . $this->id;
    include "conexao.php";

    $resultado = $conexao->query($sql);
    $linha = $resultado->fetch();

    $this->email = $linha['email'];
    $this->senha = $linha['senha'];
    $this->isAdmin = $linha['isAdmin'];
  }

  private function emailExiste($email)
  {
    include "classes/conexao.php";

    $sql = "SELECT * FROM tb_usuario WHERE email = :email";

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':email', $email);
    $resultado->execute();

    if ($resultado->rowCount() > 0) {
      return true;
    }

    return false;
  }

  private function isAdmin($email)
  {
    include "classes/conexao.php";

    $sql = "SELECT isAdmin FROM tb_usuario WHERE email = :email";

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':email', $email);
    $resultado->execute();

    $linha = $resultado->fetch(PDO::FETCH_ASSOC);

    if ($linha && isset($linha['isAdmin'])) {
      return (bool) $linha['isAdmin'];
    }

    return false;
  }

  private function contarUsuarios()
  {
    include "classes/conexao.php";

    $sql = "SELECT COUNT(*) AS total FROM tb_usuario";

    $resultado = $conexao->prepare($sql);
    $resultado->execute();

    $linha = $resultado->fetch(PDO::FETCH_ASSOC);

    return $linha['total'];
  }
}
