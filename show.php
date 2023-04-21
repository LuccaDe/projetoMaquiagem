<?php
    include_once("templates/header.php");
?>
      
<h1> PÁGINA DE DETALHES DE PRODUTOS</h1>

<h5>NAVEGAÇÃO PROVISÓRIA</h5>
<a href="<?php $BASE_URL?>index.php">INDEX</a>

</br>

<div class="container">  
    <div class="card">
        <img src="<?= $produto["img"] ?>" class="card-img-top modal-img">
        <div class="card-body"> 
            <h3 class="card-title"><?= $produto["nome"] ?></h3>
            <h4 class="card-subtitle">Valor:<?= $produto["valor"] ?></h4>
        </div>
    </div>
</div>

<?php
  include_once("templates/footer.php");
?>