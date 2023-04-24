<?php
    include_once("templates/header.php");

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

    </br>
    </br>

    <?php if(count($produtos) > 0): ?>

          <?php foreach($produtos as $produto): ?>

            <div class="card cardP">
              <img src="<?= $produto["img"] ?>" class="card-img-top">
              <div class="card-body mt-5">
                <h3 class="card-title">Nome: <?= $produto["nome"]?> </h3>
                <h4 class="card-subtitle">Valor: R$<?= $produto["valor"]?></h4>

                </br>

                <a href="<?= $BASE_URL ?>edit.php?id=<?= $produto["id"] ?>" class="btn btn-outline-success">Editar</a>

                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $produto["id"] ?>">
                  <button type="submit" class="btn btn-outline-danger mt-2">Excluir</button>
                </form>
              </div>
          </div>

          <?php endforeach; ?>

    <?php else: ?>
      </br>  
      <p id="empty-list-text">Ainda não há produtos em seu catálogo, <a href="<?php $BASE_URL?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>

  </div>
<?php
  include_once("templates/footer.php");
?>
