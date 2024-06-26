<?php
class Comentario
{
  public $id;
  public $nome;
  public $email;
  public $comentario;
  public $aprovado;

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

    $sql = "INSERT INTO tb_comentario (nome, email, comentario) VALUES (:nome, :email, :comentario)";

    $resultado = $conexao->prepare($sql);
    $resultado->bindParam(':nome', $this->nome);
    $resultado->bindParam(':email', $this->email);
    $resultado->bindParam(':comentario', $this->comentario);
    $resultado->execute();
  }

  public function listar()
  {
    include "conexao.php";

    $sql = "SELECT * FROM tb_comentario WHERE aprovado";

    $resultado = $conexao->query($sql);
    $lista = $resultado->fetchAll();

    return $lista;
  }

  public function listarAdmin()
  {
    include "conexao.php";

    $sql = "SELECT * FROM tb_comentario WHERE aprovado IS NULL";

    $resultado = $conexao->query($sql);
    $lista = $resultado->fetchAll();

    return $lista;
  }

  public function excluir()
  {
    $sql = "DELETE FROM tb_comentario WHERE id=" . $this->id;

    include "conexao.php";

    $conexao->exec($sql);
  }

  public function carregar()
  {
    $sql = "SELECT * FROM tb_comentario WHERE id=" . $this->id;
    include "conexao.php";

    $resultado = $conexao->query($sql);
    $linha = $resultado->fetch();

    $this->nome = $linha['nome'];
    $this->email = $linha['email'];
    $this->comentario = $linha['comentario'];
  }

  public function atualizar()
  {
    $sql = "UPDATE tb_comentario SET 
                    nome = '$this->nome' ,
                    email = '$this->email' ,
                    comentario = '$this->comentario'
                WHERE id = $this->id ";

    include "conexao.php";
    $conexao->exec($sql);
  }

  public function aprovarDesaprovar($aprovado)
  {
    $sql = "UPDATE tb_comentario SET 
                    aprovado = '$aprovado'
                WHERE id = $this->id ";

    include "conexao.php";
    $conexao->exec($sql);
  }

  public function exportar()
  {
    include "conexao.php";

    $sql = "SELECT nome, email, comentario FROM tb_comentario WHERE aprovado OR aprovado IS NULL";
    $resultado = $conexao->query($sql);

    $comentarios = [];
    while ($linha = $resultado->fetch()) {
      $comentario = [
        'nome' => $linha['nome'],
        'email' => $linha['email'],
        'comentario' => $linha['comentario']
      ];
      $comentarios[] = $comentario;
    }

    return $comentarios;
  }
}
