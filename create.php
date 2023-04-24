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


<div id="cadastro" class="mb-5 d-flex align-items-center justify-content-center">
    <h2 class="mr-5">Cadastrar Produto</h2>

    <form action="<?= $BASE_URL?>config/process.php" method="POST" class="ml-5">
        <input type="hidden" name="type" value="create"></input>

        <div class="form-group">
            <label for="nome-produto">Nome do produto:</label>
            <input class="form-control mr-auto ml-auto" type="text" name="nome" id="nome-produto">
        </div>

        <div class="form-group">
            <label for="valor-produto">Valor(R$):</label>
            <input class="form-control mr-auto ml-auto" type="number" name="valor" id="valor-produto">
        </div>

        <div class="form-group">
            <label for="img-produto">Imagem do produto (URL):</label>
            <input class="form-control mr-auto ml-auto" type="text" name="img" id="img-produto">
        </div>

            <button type="submit" class="btn btn-outline-primary btn-rosa mt-3">Cadastrar</button>
    </form>
</div>

<?php
    include_once("templates/footer.php")
?>