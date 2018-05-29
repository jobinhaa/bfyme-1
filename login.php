<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<?php 
  session_start();
?> 
    <div class="foo">
      <div class="foo-login"></div>
      <div class="container">
        <div class="modal-login">
          <div class="modal-image">
            <h1 class="title">Entre e aproveite nossos serviços</h1>
            <h2 class="subtitle">Sua beleza a toda hora</h2>
          </div>
          <form class="modal-form" action="includes/login.php" method="post">
              <?php if(isset($_SESSION['loginErro'])){
                  echo $_SESSION['loginErro'];
                  unset($_SESSION['loginErro']);
              }?>
            <h3 class="title">Login</h3>
            <fieldset class="login-field">
              <label class="login-label" for="nm_usuario">Usuário</label>
              <input class="login-input" type="text" name="nm_usuario" id="nm_usuario" placeholder="Digite seu usuário" required>
            </fieldset>
            <fieldset class="login-field">
              <label class="login-label" for="ds_senha">Senha</label>
              <input class="login-input" type="password" name="ds_senha" id="ds_senha" placeholder="Digite sua senha" required>
            </fieldset>
            <button class="btn" name="login" type="submit">Entrar</button><a class="forgot-psw" href="#">Esqueci minha senha!</a><span class="do-account">Ainda não tem cadastro? <a href="cadastro.html">Clique aqui</a></span>
          </form>
        </div>
        <button class="btn btn-back-login"><a href="index.php">Voltar</a></button>
      </div>
    </div>
  </body>
</html>
