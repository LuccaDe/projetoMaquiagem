<?php
    include_once("templates/header.php")
?>

<nav class="navbar navbar-expand-md navbar-light">

  <a href="<?php $BASE_URL?>index.php" class="navbar-brand"><img src="img/logo.png" alt="Imagem logo"></a>

  <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav-target">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>index.php">Home</a> <!--tag de âncora-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>create.php">Cadastro de Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>painel.php">Edição e Exclusão de Produtos</a>
      </li>
    </ul>
  </div>
</nav>

<br>
<br>

<div id="adm" class="mb-5 d-flex align-items-center justify-content-center">
    <form class="justify-content-center">
        <h2 class="mb-5">LOGIN</h2>

        <div class="form-group">
            <input class="form-control mr-auto ml-auto" type="text" placeholder="Digite seu usuário">
        </div>

        <div class="form-group">
            <input class="form-control mr-auto ml-auto mb-3" type="password" placeholder="Digite sua senha">
            <small class="text-success">Acesso Concedido</small>
        </div>

        <a href="<?php $BASE_URL?>adminPass.php"><input class="btn btn-outline-primary btn-rosa mt-2" type="button" value="Login"></a>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>