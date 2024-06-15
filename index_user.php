<?php
require_once 'usuario-verifica.php';

if (
    isset($_SESSION['usuario']) &&
    isset($_SESSION['role']) &&
    $_SESSION['role'] != 'user'
) {
    header('Location: index_adm.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Usuário</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/index.css" />
    <link rel="stylesheet" href="./assets/styles/index_user.css" />
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
        <p>Não tem nada aqui</p>
        <img src="./assets/images/gifs/2ec.gif" class="img-fluid" />
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>