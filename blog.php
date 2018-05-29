<?php include "includes/db.php";
      include "config/config.php;"?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bfy.me tags -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <title>Bfy.me</title>
  </head>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-118141758-1', 'auto');
    ga('send', 'pageview');
  </script>
  <body>
    <header>
      <div class="container-header"><a class="brand" href="index.html">
          <svg>
            <use xlink:href="images/icons.svg#logo"></use>
          </svg></a>
        <input type="checkbox" id="label-login" name="login">
        <label class="label-login" for="label-login"><span class="icon-hamburguer"></span></label>
        <nav class="menu">
          <ul class="menu-navegation">
            <li class="item hidden-lg"><a href="login.html">Entrar</a></li>
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
        </nav><a class="btn btn-login" href="login.html">Entrar</a>
      </div>
    </header>
    <div class="foo banner_default banner_duvidas">
      <section class="main-banner">
        <h2 class="title_default title_banner">Estética, beleza, bem-estar e saúde</h2>
        <h3 class="subtitle_default subtitle_banner">O blog do Bfy.me está aqui</h3>
      </section>
    </div>
    <div class="container">
      <h2 class="text-center m-5 title_default">Últimas postagens</h2>
      <div class="row">
        <div class="col-sm-8 blog-main">
        <?php
          global $connection;

          $query = "SELECT * FROM t_sbfy_post ORDER BY post_id DESC";
          $mysql_query = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($mysql_query)) {
            $post_title = $row['post_title'];
            $post_autor = $row['post_autor'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
            $post_date = $row['post_date'];

         ?>
          <div class="blog-post mb-5">
            <h2 class="blog-post-title title_item"><?php echo $post_title ?></h2>
            <p class="blog-post-meta"><?php echo $post_date ?>, por <?php echo $post_autor ?></p>
            <hr>
            <p><?php echo $post_content ?></p>
            <img src="images/posts/<?php echo $post_image; ?>" class="img-fluid m-3" alt="Responsive image">
            <a href="#" class="badge badge-secondary">Beleza</a>
            <a href="#" class="badge badge-secondary">Saúde</a>
            <a href="#" class="badge badge-secondary">#DicaBfyme</a>
          </div>
        <?php }; ?>
        </div>
        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <div class="card">
              <div class="card-header">
                #Tags populares
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">#Beleza</li>
                <li class="list-group-item">#Saúde</li>
                <li class="list-group-item">#DicaBfyme</li>
                <li class="list-group-item">#Bfyme</li>
                <li class="list-group-item">#Estetica</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
