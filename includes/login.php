<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
    if(isset($_POST['login'])){
        $nm_usuario = $_POST['nm_usuario'];
        $ds_senha = $_POST['ds_senha'];
        $nm_usuario = mysqli_real_escape_string($con, $nm_usuario);
        $ds_senha = mysqli_real_escape_string($con,$ds_senha);

        $query = "SELECT * FROM t_sbfy_usuario WHERE nm_usuario = '$nm_usuario'";
        $select_usuario = mysqli_query($con, $query);
        while($row = mysqli_fetch_assoc($select_usuario)){
            $db_id = $row['cd_usuario'];
            $db_user = $row['nm_usuario'];
            $db_password = $row['ds_senha'];
            $db_role = $row['role'];
            $db_nome = $row['nm_cliente'];
        }
        if($nm_usuario !== $db_user && $ds_senha !== $db_password){
            $_SESSION['loginErro'] = "<div class='msg'>Usuário ou senha Inválido</div>";
            header('Location: ../login.php');
            
        }elseif($nm_usuario == $db_user && $ds_senha == $db_password){
            $_SESSION['nm_usuario'] = $db_user;
            $_SESSION['ds_senha'] = $db_password;
            $_SESSION['role'] = $db_role;
            $_SESSION['ds_senha'] = $db_nome;
            header('Location: ../account.php');
        }else{
            header('Location: ../index.php');
        }
    }
?>