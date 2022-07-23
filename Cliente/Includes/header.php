<?php
session_id();
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Padaria Progresso</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./estilo.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://use.fontawesome.com/ea21c98100.js"></script>
  <script src="https://kit.fontawesome.com/c1e1266368.js" crossorigin="anonymous"></script>
  <link href="./Assets/css/main.css" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../Assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../Assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../Assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../Assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../Assets/vendor/aos/aos.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center" style="background-color:#0e1d34;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="ml-3 logo-padaria"><img src="./Assets/logo.png" style="width: 100px;" alt="logo"></a>
      
      <!-- <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> -->
      <nav id="navbar" class="navbar navbar-desktop">
        <ul class="mr-5">
          <li><a href="index.php" class="active">Início</a></li>
          <li><a href="carrinho.php">Carrinho</a></li>
          <li><a href="sobre.php">Sobre Nós</a></li>
          <li><a href="../Cliente/acesso_config.php?primeiro_nome=<?php echo $_SESSION['primeiro_nome'];?>">Configurações</a></li>
          <li><a href="./produtos/categorias.php">Categorias</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
      <nav id="navbar" class="navbar navbar-mobile">
        <ul class="mr-5">
          <li><a href="index.php" class="active">Início</a></li>
          <li><a href="carrinho.php">Carrinho</a></li>
          <li><a href="sobre.php">Sobre Nós</a></li>
        </ul>
        <ul class="mr-5">
        <li><a href="../Cliente/acesso_config.php?primeiro_nome=<?php echo $_SESSION['primeiro_nome'];?>">Configurações</a></li>
          <li><a href="./produtos/categorias.php">Categorias</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->