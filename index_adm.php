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
    $comentario = new Comentario();
    $comentarios = $comentario->listarAdmin();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Admin</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/index.css" />
    <link rel="stylesheet" href="./assets/styles/index_adm.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand flag-logo" href="index.php">
                <video muted autoplay loop>
                    <source src="./assets/videos/flag-video.mp4" type="video/mp4" />
                </video>
                Inglaterra
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Ínicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cultura.php">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gastronomia.php">Gastronomia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pontos-turisticos.php">Pontos Turísticos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historia.php">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comentario.php">Envie um comentário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comentarios.php">Comentários</a>
                    </li>
                    <li class="nav-item">
                        <?= isset($_SESSION['usuario']) &&
                            isset($_SESSION['role']) &&
                            $_SESSION['role'] == 'adm'
                            ? '<a class="nav-link" href="index_adm.php">Painel Admin</a>'
                            : (isset($_SESSION['usuario']) &&
                                isset($_SESSION['role']) && $_SESSION['role'] == 'user' ?
                                '<a class="nav-link" href="index_user.php">Painel Usuário</a>'
                                : '')
                        ?>
                    </li>
                    <li class="nav-item">
                        <?= isset($_SESSION['usuario']) &&
                            isset($_SESSION['role']) &&
                            $_SESSION['role'] == 'adm'
                            ? '<a class="nav-link" href="exportar_comentarios.php">Exportar comentários</a>'
                            : ''
                        ?>
                    </li>
                    <li class="nav-item">
                        <?= !isset($_SESSION['usuario'])
                            ? '<a class="nav-link" href="login.php">Login</a>'
                            : '<a class="nav-link" href="./usuario-logout.php">Logout</a>'
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5 pt-5">
        <h1>Comentários - Painel Admin</h1>
        <div class="mb-5">
            <h2>Importar Comentários</h2>
            <form action="importar_comentarios.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="jsonFile" class="form-label">Selecionar arquivo JSON</label>
                    <input type="file" class="form-control" id="jsonFile" name="jsonFile" accept=".json" required>
                </div>
                <button type="submit" class="btn btn-primary">Importar</button>
            </form>
        </div>

        <div class="listar-comentarios">
            <?php foreach ($comentarios as $comentario) : ?>
                <div class="comentario">
                    <h5>Nome: <?= htmlspecialchars($comentario['nome']) ?></h5>
                    <p><strong>Comentário:</strong> <?= htmlspecialchars($comentario['comentario']) ?></p>
                    <small><strong>Email:</strong> <?= htmlspecialchars($comentario['email']) ?></small>

                    <div class="mt-2">
                        <button type="button" class="btn btn-success" onclick="aprovarRejeitarComentario(<?= $comentario['id'] ?>, 'aprovar')">Aprovar</button>
                        <button type="button" class="btn btn-danger" onclick="aprovarRejeitarComentario(<?= $comentario['id'] ?>, 'rejeitar')">Rejeitar</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="mt-4 text-center">
                    <div>
                        <h6 class="footer-heading text-uppercase fw-bold">Informações</h6>
                        <p class="mb-0">Desenvolvido por Carlos Rafael da Costa</p>
                        <p class="mb-0">Aula de Desenvolvimento Web III</p>
                        <p class="mb-0">Professor Júnior Gonçalves</p>
                        <p class="mb-0">FATEC Itapira "Ogari de Castro Pacheco"</p>
                        <div class="mt-2">
                            <a href="./index.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">Ínicio</a>
                            <a href="cultura.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">Cultura</a>
                            <a href="gastronomia.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">Gastronomia</a>
                            <a href="pontos-turisticos.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">Pontos Turísticos</a>
                            <a href="historia.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">História</a>
                            <a href="contato.html" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-semibold">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bg-dark text-white mt-4 p-1">
            <p class="mb-0 fw-bold">2024 © Carlos Rafael da Costa</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function aprovarRejeitarComentario(id, acao) {
            fetch('aprovar_desaprovar.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        'id': id,
                        'acao': acao
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert('Comentário ' + (acao === 'aprovar' ? 'aprovado' : 'rejeitado') + ' com sucesso!');
                        location.reload();
                    } else {
                        alert('Erro ao ' + acao + ' comentário.');
                    }
                })
                .catch(error => console.error('Erro:', error));
        }
    </script>
</body>

</html>