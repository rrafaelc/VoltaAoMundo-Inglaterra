<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>gastronomia - Inglaterra</title>
  <link rel="icon" type="image/x-icon" href="./assets/favicon/bandeira.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="./assets/styles/index.css" />
  <link rel="stylesheet" href="./assets/styles/gastronomia.css" />
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

  <main class="container">
    <h1 class="display-4 text-center">Culinária Inglesa</h1>
    <div class="row culinaria my-3 mx-auto">
      <div class="row col-md-10 mx-auto d-flex justify-content-center align-items-center">
        <img src="./assets/images/chef-de-cozinha.jpg" class="imagem col-md-2 align-self-start" />

        <div class="lead col-md-8 mt-2 mt-lg-0 fs-5 text-sm-start">
          <p class="justify">
            A culinária inglesa é uma experiência única que merece ser
            explorada e apreciada. Com uma rica história e influências
            diversas, a gastronomia britânica oferece pratos tradicionais e
            saborosos que refletem a cultura e os sabores únicos do país.
            Desde os clássicos como o famoso "fish and chips" até as
            deliciosas sobremesas como o "sticky toffee pudding", a culinária
            inglesa é uma verdadeira viagem gastronômica. Experimente os
            sabores autênticos e descubra por que a culinária inglesa é tão
            especial.
          </p>
        </div>
      </div>
    </div>

    <div class="container table-responsive">
      <table class="table table-striped mb-4 gastronomia">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col" class="descricao">Descrição</th>
            <th scope="col" class="preco">Preço</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/fish-and-chips.jpg" alt="Fish and Chips" />
            </td>
            <td>Fish and Chips</td>
            <td class="descricao">
              Prato tradicional britânico de peixe frito empanado e batatas
              fritas, servido com molho tártaro.
            </td>
            <td class="preco">€ 19,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/shepherds-pie.jpg" alt="Shepherd's Pie" />
            </td>
            <td>Shepherd's Pie</td>
            <td class="descricao">
              Um prato de carne moída cozida com molho, coberto com purê de
              batatas e assado até dourar.
            </td>
            <td class="preco">€ 20,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/bangers-and-mash.jpg" alt="Bangers and Mash" />
            </td>
            <td>Bangers and Mash</td>
            <td class="descricao">
              Salsichas grelhadas servidas com purê de batatas.
            </td>
            <td class="preco">€ 12,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/beef-wellington.jpg" alt="Beef Wellington" />
            </td>
            <td>Beef Wellington</td>
            <td class="descricao">
              Carne bovina coberta com patê e envolta em massa folhada, assada
              até dourar.
            </td>
            <td class="preco">€ 15,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/ploughmans-lunch.jpg" alt="Ploughman's Lunch" />
            </td>
            <td>Ploughman's Lunch</td>
            <td class="descricao">
              Um prato tradicionalmente composto por queijo, pão, picles e
              chutney.
            </td>
            <td class="preco">€ 8,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/toad-in-the-hole.jpg" alt="Toad in the Hole" />
            </td>
            <td>Toad in the Hole</td>
            <td class="descricao">
              Salsichas assadas em uma massa de Yorkshire pudding.
            </td>
            <td class="preco">€ 12,50</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/cornish_pasty.jpg" alt="Cornish Pasty" />
            </td>
            <td>Cornish Pasty</td>
            <td class="descricao">
              Uma massa recheada com carne, batatas e legumes.
            </td>
            <td class="preco">€ 10,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/bubble-and-squeak.jpg" alt="Bubble and Squeak" />
            </td>
            <td>Bubble and Squeak</td>
            <td class="descricao">
              Um prato feito com sobras de legumes e batatas fritas ou
              refogadas.
            </td>
            <td class="preco">€ 16,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/eton-mess.jpg" alt="Eton Mess" />
            </td>
            <td>Eton Mess</td>
            <td class="descricao">
              Uma sobremesa feita com morangos, creme de leite e merengue.
            </td>
            <td class="preco">€ 5,00</td>
          </tr>
          <tr>
            <td>
              <img src="./assets/images/gastronomia/spotted-dick.jpg" alt="Spotted Dick" />
            </td>
            <td>Spotted Dick</td>
            <td class="descricao">
              Uma sobremesa de pudim de frutas secas, tradicionalmente servida
              com creme inglês.
            </td>
            <td class="preco">€ 7,00</td>
          </tr>
        </tbody>
      </table>
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