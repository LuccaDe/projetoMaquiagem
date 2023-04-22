<?php
    include_once("templates/header.php");

?>

<div class="container">

    <h1 id="main-title">Edição e Exclusão de Produtos</h1>

    </br>

    <nav class="navbar">
      <h5>NAVEGAÇÃO PROVISÓRIA</h5>
      <a href="<?php $BASE_URL?>index.php">INDEX</a>
      <a href="<?php $BASE_URL?>create.php">CADASTRO DE PRODUTOS</a>
      <a href="<?php $BASE_URL?>painel.php">EDIÇÃO E EXCLUSÃO DE PRODUTOS</a>
    </nav>

    </br>
    </br>

    <?php if(count($produtos) > 0): ?>

          <?php foreach($produtos as $produto): ?>

            <div class="card">
              <img src="<?= $produto["img"] ?>" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">Nome: <?= $produto["nome"]?> </h3>
                <h4 class="card-subtitle">Valor: R$<?= $produto["valor"]?></h4>

                </br>

                <a href="<?= $BASE_URL ?>edit.php?id=<?= $produto["id"] ?>" class="btn btn-outline-success">Editar</a>
                <a href="<?php $BASE_URL?>show.php?id=<?= $produto["id"] ?>" class="btn btn-outline-danger">Excluir</a>
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
