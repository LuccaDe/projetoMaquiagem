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
        <a class="nav-link" href="quemSomos.html">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contatos">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>admin.php">Administrador</a>
      </li>
    </ul>
  </div>
</nav>	

</br>

<div class="container">  
    <div class="card cardP">
        <img src="<?= $produto["img"] ?>" class="card-img-top modal-img">
        <div class="card-body mt-5"> 
            <h3 class="card-title"><?= $produto["nome"] ?></h3>
            <h4 class="card-subtitle">Valor:<?= $produto["valor"] ?></h4>
        </div>
    </div>
</div>

<?php
  include_once("templates/footer.php");
?>