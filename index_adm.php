<?php require_once 'usuario-verifica.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/styles/index.css" />
    <link rel="stylesheet" href="./assets/styles/login.css" />
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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./usuario-logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5 pt-5">
        Pagina admin
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
</body>

</html>