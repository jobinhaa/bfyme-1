<?php include "../includes/db.php";

  function createPost(){
    global $connection;

    if(isset($_POST['cadastrar'])){
      $post_title = $_POST['post_title'];
      $post_date = date('d-m-y');
      $post_autor = $_POST['post_autor'];
      $post_image = $_FILES['post_image']['name'];
      $post_image_temp = $_FILES['post_image']['tmp_name'];
      $post_content = $_POST['post_content'];

      move_uploaded_file($post_image_temp, '../images/posts/' . $post_image);


      $post_title = mysqli_real_escape_string($connection, $post_title);
      $post_date = mysqli_real_escape_string($connection, $post_date);
      $post_autor = mysqli_real_escape_string($connection, $post_autor);
      $post_content = mysqli_real_escape_string($connection, $post_content);

      $query = "INSERT INTO t_sbfy_post(post_title, post_date, post_autor, post_image, post_content) VALUES('$post_title', now(), '$post_autor', '$post_image', '$post_content')";

      $newPost = mysqli_query($connection, $query);

      if(!$newPost){
        die("<div class='alert alert-danger' role='alert'>Falha no cadastro: </div>" .  mysqli_error($connection));
      }else{
        echo "<div class='alert alert-success' role='alert'>Postagem cadastrada com sucesso!</div>";
      }
    }
  }

  function updatePost(){
    global $connection;

    $query = "SELECT * FROM t_sbfy_post";
    $selectPosts = mysqli_query($connection, $query);

    if (isset($_POST['atualizar'])) {
      $post_id = $_POST['post_id'];
      $post_title = $_POST['post_title'];
      $post_autor = $_POST['post_autor'];
      $post_content = $_POST['post_content'];

      $post_id = mysqli_real_escape_string($connection, $post_id);
      $post_title = mysqli_real_escape_string($connection, $post_title);
      $post_autor = mysqli_real_escape_string($connection, $post_autor);
      $post_content = mysqli_real_escape_string($connection, $post_content);

      $updateQuery = "UPDATE t_sbfy_post SET post_title = '$post_title', post_autor = '$post_autor', post_content = '$post_content' WHERE post_id = $post_id";
      $respondeQuery = mysqli_query($connection, $updateQuery);

      if(!$respondeQuery){
        die("<div class='alert alert-danger' role='alert'>Falha na atualização: </div>" .  mysqli_error($connection));
      }else{
        echo "<div class='alert alert-success' role='alert'>Postagem atualizada com sucesso!</div>";
      }
    }

  }

  function listPostId(){
    global $connection;

    $query = "SELECT * FROM t_sbfy_post";
    $listingPosts = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($listingPosts)){
      $post_id = $row['post_id'];
      echo "<option value='$post_id'>$post_id</option>";
    }
  }
 ?>
