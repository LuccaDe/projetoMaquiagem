<?php
    include_once("templates/header.php");
?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Meus Produtos</h1>
    <?php if(count($produtos) > 0): ?>
      <table class="table" id="tabela-produtos">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Produto</th>
            <th scope="col">Valor (R$)</th>
            <th scope="col">Imagem teste</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($produtos as $produto): ?>
            <tr>
              <td scope="row" class="col-id"><?= $produto["id"] ?></td>
              <td scope="row"><?= $produto["nome"] ?></td>
              <td scope="row"><?= $produto["valor"] ?></td>
              <td scope="row"><?= $produto["url"] ?></td>
              <td class="actions">
                <a href="#"><i class="fas fa-eye check-icon"></i></a>
                <a href="#"><i class="far fa-edit edit-icon"></i></a>
                <a href="#"><i class="fas fa-times delete-icon"></i></a>                
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>  
      <p id="empty-list-text">Ainda não há produtos em seu catálogo, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
  </div>
<?php
  include_once("templates/footer.php");
?>
