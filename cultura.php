<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cultura - Inglaterra</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./assets/styles/index.css" />
  <link rel="stylesheet" href="./assets/styles/cultura.css" />
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

  <main class="container-lg historia">
    <div class="row">
      <h1 class="display-5 my-2 text-center">Cultura</h1>
    </div>

    <div class="container marketing my-5">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Chá da tarde</h2>
          <p class="lead">
            O chá da tarde é uma tradição muito popular na Inglaterra. Surgiu
            no século XIX e consiste em uma refeição leve, geralmente
            acompanhada de chá e bolos. É uma forma de socializar e relaxar no
            final da tarde.
          </p>
        </div>
        <div class="col-md-5">
          <img src="./assets/images/cultura/cha-da-tarde.jpg" alt="Chá da tarde" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Futebol</h2>
          <p class="lead">
            O futebol é um esporte muito popular na Inglaterra. O país é
            considerado o berço do futebol moderno, com a criação das regras
            do jogo em 1863. Os clubes de futebol ingleses têm uma grande
            rivalidade e os jogos são sempre muito disputados e emocionantes.
          </p>
        </div>

        <div class="col-md-5 order-md-1">
          <img src="./assets/images/cultura/futebol.jpg" alt="Chá da tarde" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Música</h2>
          <p class="lead">
            A música britânica tem uma influência mundial. Bandas como The
            Beatles, Rolling Stones e Queen são ícones da música pop e rock. O
            Reino Unido é conhecido por produzir talentos musicais de sucesso
            que conquistam fãs em todo o mundo.
          </p>
        </div>
        <div class="col-md-5">
          <img src="./assets/images/cultura/the-beatles.jpg" alt="Chá da tarde" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" />
        </div>
      </div>
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
</body>

</html>