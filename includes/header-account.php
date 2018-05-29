<?php 
    include "includes/db.php"; 
    include "includes/functions.php"; 
    session_start();
    if(!isset($_SESSION['role'])){
        if($_SESSION['role'] != 'user'){
            header('Location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bfy.me - Minha Conta</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  </head>
  <body class="bg-account">
    <header>
      <div class="container-header"><a class="brand" href="index.html">
          <svg>
            <use xlink:href="images/icons.svg#logo"></use>
          </svg></a>
        <input type="checkbox" id="label-login" name="login">
        <label class="label-login" for="label-login"><span class="icon-hamburguer"></span></label>
        <nav class="menu">
          <ul class="menu-navegation">
            <li class="item hidden-lg"> <a href="login.html">Entrar</a></li>
            <li class="item servicos"><a href="#dropdown">Serviços
                <div class="icon-arrow"></div>
                <div id="dropdown"><a class="menu-link-dropdown" href="servicos.html">
                     Maquiagem
                    <svg>
                      <use xlink:href="images/icons.svg#maquiagem"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Massagem
                    <svg>
                      <use xlink:href="images/icons.svg#massagem"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Manicure
                    <svg>
                      <use xlink:href="images/icons.svg#manicure"> </use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Podologia
                    <svg>
                      <use xlink:href="images/icons.svg#podologia"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Penteado
                    <svg>
                      <use xlink:href="images/icons.svg#penteado"></use>
                    </svg></a></div></a></li>
            <li class="item"><a href="duvidas.html">Dúvidas</a></li>
            <li class="item"><a href="blog.php">Blog</a></li>
            <li class="item"><a href="profissional.html">Seja um profissional</a></li>
          </ul>
        </nav>
        <div class="btn btn-login label-menu-account"><?php echo $_SESSION['nm_usuario']; ?>
          <div class="arrow-menu"></div>
          <ul class="menu-account">
            <li><a href="#">Minha Conta</a></li>
            <li><a href="#">Conta Profissional</a></li>
            <li><a href="includes/logout.php">Sair da Conta</a></li>
          </ul>
        </div>
      </div>
    </header>