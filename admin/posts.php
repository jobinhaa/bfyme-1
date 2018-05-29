<?php include "../admin/includes/functions.php";
 ?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <!-- Bfy.me tags -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Bfy.me</title>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
       <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="posts.php">Bfy.me</a>
       <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
           <a class="nav-link" href="../index.html">Sair</a>
         </li>
       </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Gerenciamento de Postagens <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastro de postagem</h1>
          </div>
          <form action="posts.php" method="post" id="createPost" enctype="multipart/form-data">
            <?php createPost(); ?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="post_title">Título</label>
                <input type="text" name="post_title" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label for="post_autor">Autor</label>
                <input type="text" name="post_autor" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label for="post_image">Upload de imagem</label>
              <input type="file" name="post_image" class="form-control">
            </div>
            <div class="form-group">
              <label for="post_content">Corpo do texto</label>
              <textarea class="form-control" name="post_content" rows="3" required></textarea>
            </div>
            <div class="text-right">
              <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary mt-3">
            </div>
          </form>

          <h2 class="mt-5">Atualizar postagem</h2>
          <hr>
          <form action="posts.php" method="post" id="updatePost">
            <?php updatePost(); ?>
            <div class="form-group">
              <label for="post_id">ID da postagem</label>
              <select class="form-control" name="post_id">
                <?php listPostId(); ?>
              </select>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="post_title">Título</label>
                <input type="text" name="post_title" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label for="post_autor">Autor</label>
                <input type="text" name="post_autor" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label for="post_content">Corpo do texto</label>
              <textarea class="form-control" name="post_content" rows="3" required></textarea>
            </div>
            <div class="text-right">
              <input type="submit" name="atualizar" value="Atualizar" class="btn btn-primary mt-3">
            </div>
          </form>

          <h2 class="mt-5">Excluir postagens</h2>
          <hr>
          <div class="row mb-5">
            <div class="col-md-6">
              <form action="posts.php" method="post">
                <label for="post_id">ID da postagem</label>
                <select class="form-control" name="post_id">
                  <?php listPostId(); ?>
                </select>
                <div class="text-right">
                  <input type="submit" name="excluir" value="Atualizar" class="btn btn-light mt-3">
                </div>
              </form>
            </div>
            <div class="col-md-6 mt-2">
              <div class="card">
                <h5 class="card-header bg-secondary text-light">Atenção!</h5>
                <div class="card-body">
                  <p class="card-text text-muted">A exclusão de uma postagem é permanente. Consulte os colaboradores do Bfy.me antes de excluir uma postagem!</p>
                </div>
              </div>
            </div>
          </div>

        </main>
      </div>
    </div>

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
