<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pontos Turísticos - Inglaterra</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./assets/styles/index.css" />
  <link rel="stylesheet" href="./assets/styles/pontos-turisticos.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand flag-logo" href="./index.php">
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

  <main class="container-lg">
    <div class="row">
      <h1 class="display-5 my-2 text-center">Pontos Turísticos</h1>

      <p class="col-md-10 mx-auto lead justify">
        Descubra a magia dos pontos turísticos da Inglaterra! Explore o
        Palácio de Buckingham, residência oficial da monarquia britânica.
        Encante-se com a Torre de Londres e visite o icônico Big Ben. Passeie
        pelas ruas de Oxford e embarque em uma jornada pelo passado em
        Stonehenge. Sinta a energia de Piccadilly Circus, o coração pulsante
        de Londres. Venha viver momentos inesquecíveis na terra da Rainha!
      </p>

      <div id="carouselExampleCaptions" class="carousel slide col-md-10 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Stonehenge"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Castelo de Windsor"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Palácio de Buckingham"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/images/pontos-turisticos/Stonehenge.jpg" />
            <div class="carousel-caption d-none d-sm-block px-2">
              <h5>Stonehenge &#9733;&#9733;&#9733;&#9733;</h5>
              <p>
                Stonehenge, um enigma ancestral de pedras que ecoa a passagem
                do tempo e a habilidade da humanidade em construir monumentos
                duradouros.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/images/pontos-turisticos/Castelo-de-Windsor.jpg" />
            <div class="carousel-caption d-none d-sm-block px-2">
              <h5>Castelo de Windsor &#9733;&#9733;&#9733;&#9733;&#9733;</h5>
              <p>
                O Castelo de Windsor, majestoso e imponente, é um tesouro
                histórico que conta séculos de história real e preserva a
                grandiosidade da realeza britânica.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./assets/images/pontos-turisticos/Palacio-de-Buckingham.jpg" />
            <div class="carousel-caption d-none d-sm-block px-2">
              <h5>Palácio de Buckingham &#9733;&#9733;&#9733;&#9733;</h5>
              <p>
                O Palácio de Buckingham, residência oficial da monarquia
                britânica, é um ícone de elegância e poder que cativa
                visitantes de todo o mundo com sua beleza e história.
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="all-cards row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3 my-4 mb-5 text-center mx-auto col-md-10">
      <div>
        <div class="card">
          <img src="./assets/images/pontos-turisticos/London-Eye.jpg" class="card-img-top img-fluid" alt="London Eye" />
          <div class="card-body">
            <h5 class="card-title">London Eye</h5>
            <p class="lead">
              O London Eye, uma das maiores rodas-gigantes do mundo, oferece
              uma vista incrível de Londres. Com 135 metros de altura,
              proporciona uma experiência única e memorável, com vistas
              panorâmicas de tirar o fôlego da cidade. Vale a pena visitar!
            </p>
            <a href="#" class="btn btn-primary w-100 mt-3">Quero visitar</a>
          </div>
        </div>
      </div>

      <div>
        <div class="card">
          <img src="./assets/images/pontos-turisticos/Big-Ben.jpg" class="card-img-top img-fluid" alt="Big Ben" />
          <div class="card-body">
            <h5 class="card-title">Big Ben</h5>
            <p class="lead">
              O Big Ben é um dos ícones mais famosos de Londres. Localizado no
              Palácio de Westminster, é conhecido pelo seu grande sino e pelo
              imponente relógio. Com uma história rica e uma arquitetura
              impressionante, o Big Ben é uma parada obrigatória para quem
              visita a cidade.
            </p>
            <a href="#" class="btn btn-primary w-100 mt-3">Quero visitar</a>
          </div>
        </div>
      </div>

      <div>
        <div class="card">
          <img src="./assets/images/pontos-turisticos/Museu-Britanico.jpg" class="card-img-top img-fluid" alt="Museu Britânico" />
          <div class="card-body">
            <h5 class="card-title">Museu Britânico</h5>
            <p class="lead">
              Um dos maiores e mais famosos museus do mundo. Fundado em 1753,
              abriga uma vasta coleção de arte e artefatos de várias culturas
              e períodos históricos. Com entrada gratuita, é uma visita
              imperdível para quem quer conhecer a história e a cultura de
              diferentes partes do mundo em um só lugar.
            </p>
            <a href="#" class="btn btn-primary w-100 mt-3">Quero visitar</a>
          </div>
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