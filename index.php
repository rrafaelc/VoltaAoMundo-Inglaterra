<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Volta ao mundo - Inglaterra</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./assets/styles/index.css" />
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

  <main class="container-fluid">
    <div class="row text-center container-lg mx-auto">
      <h1 class="display-1 my-5">Bem-vindo à Inglaterra</h1>
      <div class="row lead-flag my-3 mx-auto">
        <div class="row mx-auto d-flex justify-content-center align-items-center">
          <img src="./assets/images/england-flag.jpg" class="col-md-2 align-self-start" />

          <div class="col-md-8 mt-2 mt-lg-0 fs-5 text-sm-start">
            <p>
              A Inglaterra, parte do Reino Unido, é conhecida por sua rica
              história, cultura diversificada e belas paisagens. É lar de
              cidades icônicas como Londres, com o Palácio de Buckingham e o
              Big Ben, e Manchester, conhecida por sua cena musical.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="passagem row text-center my-3 py-5">
      <div class="row d-flex justify-content-center align-items-center container-lg mx-auto">
        <p class="texto fs-4 text-sm-start fw-bold col-sm-8 col-lg-4">
          Descubra a rica culinária inglesa, que inclui pratos tradicionais
          como fish and chips e Sunday roast. Além disso, explore a paixão do
          país pelo futebol e suas elegantes casas de campo. Não deixe de
          visitar os pontos turísticos imperdíveis, como o místico Stonehenge,
          a histórica Torre de Londres e os campos verdejantes de Cotswolds.
        </p>

        <div class="card-passagem col-sm-8 col-lg-4 card text-center">
          <img src="./assets/images/viajar-para-inglaterra.jpg" class="card-img-top" alt="Imagem da viagem" />
          <div class="card-body">
            <h5 class="card-title">Viagem Inesquecível</h5>
            <p class="card-text fs-5">Data da Viagem: 1 de Julho de 2024</p>
            <p class="card-text fs-5 fw-bold text-success">
              Preço: R$ 10.000,00
            </p>
            <p class="card-text fs-5">
              Explore a Inglaterra com este pacote de viagem especial. Inclui
              passagem aérea, hospedagem e passeios guiados pelos principais
              pontos turísticos.
            </p>
            <a href="#" class="btn btn-primary w-100">Comprar passagem</a>
          </div>
        </div>
      </div>
    </div>

    <div class="all-cards row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 my-4 mb-5 text-center container-lg mx-auto">
      <div>
        <div class="card">
          <img src="./assets/images/cultura.jpg" class="card-img-top img-fluid" alt="Cultura" />
          <div class="card-body">
            <h5 class="card-title">Cultura</h5>
            <p class="lead">
              Uma das tradições mais emblemáticas é a Troca da Guarda no
              Palácio de Buckingham, um espetáculo militar e cerimonial que
              atrai visitantes de todo o mundo. Outra tradição importante é o
              chá das cinco, uma prática que se tornou um símbolo da elegância
              e hospitalidade britânicas.
            </p>
            <a href="cultura.php" class="btn btn-primary w-100 mt-3">Saiba mais</a>
          </div>
        </div>
      </div>
      <div>
        <div class="card">
          <img src="./assets/images/gastronomia.jpg" class="card-img-top img-fluid" alt="gastronomia" />
          <div class="card-body">
            <h5 class="card-title">Gastronomia</h5>
            <p class="lead">
              A culinária inglesa é conhecida por pratos tradicionais e
              reconfortantes, como o "fish and chips" (peixe frito com batatas
              fritas) e o "Sunday roast" (assado de domingo). Além disso, a
              Inglaterra é famosa por suas sobremesas, como o "sticky toffee
              pudding" (pudim de caramelo) e os scones com creme de leite e
              geleia, servidos com chá.
            </p>
            <a href="gastronomia.php" class="btn btn-primary w-100 mt-3">Saiba mais</a>
          </div>
        </div>
      </div>
      <div>
        <div class="card">
          <img src="./assets/images/ponto-turisticos.jpg" class="card-img-top img-fluid" alt="Pontos Turísticos" />
          <div class="card-body">
            <h5 class="card-title">Pontos Turísticos</h5>
            <p class="lead">
              A Inglaterra é repleta de pontos turísticos fascinantes, como o
              icônico Big Ben em Londres, o misterioso Stonehenge, e a
              majestosa Torre de Londres. Esses locais históricos e culturais
              oferecem aos visitantes uma experiência única, repleta de
              história, arquitetura e beleza natural.
            </p>
            <a href="pontos-turisticos.php" class="btn btn-primary w-100 mt-3">Saiba mais</a>
          </div>
        </div>
      </div>
      <div>
        <div class="card">
          <img src="./assets/images/historia.jpg" class="card-img-top" alt="História" />
          <div class="card-body img-fluid">
            <h5 class="card-title">História</h5>
            <p class="lead">
              A história da Inglaterra é rica e fascinante, marcada por
              eventos como a Magna Carta de 1215, que estabeleceu limites ao
              poder real, e a Revolução Industrial do século XVIII, que
              impulsionou mudanças sociais e econômicas. O país também foi
              cenário de importantes momentos da história mundial, como as
              duas guerras mundiais.
            </p>
            <a href="historia.php" class="btn btn-primary w-100 mt-3">Saiba mais</a>
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