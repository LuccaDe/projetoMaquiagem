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

<section class="conteudo-principal" id="banner">
  <div class="carousel slide" id="carousel-indicadores" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-indicadores" data-slide-to="0"></li>
      <li data-target="#carousel-indicadores" data-slide-to="1"></li>
      <li data-target="#carousel-indicadores" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="conteudo-principal-imagem" src="img/banner.jpg" alt="Propaganda gloss Pink Chilli">
      </div>

      <div class="carousel-item">
      <img class="conteudo-principal-imagem" src="img/banner2.jpg" alt="Propaganda base Fenty Beauty">
      </div>

      <div class="carousel-item">
      <img class="conteudo-principal-imagem" src="img/banner3.jpg" alt="Propaganda base Fenty Beauty">
      </div>
    </div>
  </div>
</section>
  
<?php if(isset($printMsg) && $printMsg != ''): ?>
  <p id="msg"><?= $printMsg ?></p>
<?php endif; ?>

<br/>

<div class="d-flex">
  <div>
    <img class="imagem-icon" src="img/ico-frete.webp" alt="Imagem ícon de frete">
    <div class="imagem-icon-desc">
      <p class="texto-icon">Frete grátis para todo o Brasil</p>
    </div>
  </div>
  <div class="mr-auto ml-auto">
    <img class="imagem-icon" src="img/ico-cartao-de-credito.webp" alt="Imagem ícon do cartão">
    <div class="imagem-icon-desc">
      <p>Parcelamos em até 12x s/juros</p>
    </div>
  </div>
  <div>
    <img class="imagem-icon" src="img/ico-cadeado.webp" alt="Imagem ícon do cadeado">
    <div class="imagem-icon-desc">
      <p>Compra 100% segura</p>
    </div>
  </div>
</div>

<br/>

<div id="prateleira">
  <div class="row">
    <div class="col-12">
      <h2 id="main-title">MEUS PRODUTOS</h1>
    </div>
  </div>

  <br/>

  <?php if(count($produtos) > 0): ?>
  <div class="row">
    <?php foreach($produtos as $produto): ?>
    <div class="col-sm-1 col-md-3">
      <div class="card" id="cardP">
        <img src="<?= $produto["img"]?>" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Nome: <?= $produto["nome"]?> </h3>
          <h4 class="card-subtitle">Valor: R$<?= $produto["valor"]?></h4>

          </br>

            <a href="<?php $BASE_URL?>show.php?id=<?= $produto["id"] ?>" class="btn btn-outline-primary btn-rosa">Detalhes</a>
          </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?php else: ?>
  </br>  
  <p id="empty-list-text">Ainda não há produtos em seu catálogo, <a href="<?php $BASE_URL?>create.php">clique aqui para adicionar</a>.</p>
<?php endif; ?>

</br>
<div class="row">
  <div class="col-12">
    <div class="conteudo-contato" id="contatos">              
      <h2>CONTATO</h2>            
      <form>
        <label for="nome-contato">Nome:</label>
        <input type="text" id="nome-contato" class="form-control mr-auto ml-auto">

        <label for="email-contato">E-mail:</label>
        <input type="text" id="email-contato" class="form-control mr-auto ml-auto">

        <label for="msg-contato">Mensagem:</label>
        <textarea id="msg-contato" class="form-control mr-auto ml-auto"></textarea>
              
        <button type="submit" class="btn btn-outline-primary btn-rosa mt-4">Enviar</button>   
      </form>
    </div>
  </div>
</div>



<?php
  include_once("templates/footer.php");
?>