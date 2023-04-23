<?php
  include_once("templates/header.php");
?>

<header class="cabecalho">
  <!--src = fonte // alt= texto alternativo, caso a imagem não carregue-->
  <img class="cabecalho-imagem" src="img/logo.png" alt="Imagem logo">
  <nav class="cabecalho-menu">
    <a class="cabecalho-menu-item" href="index.php">Home</a> <!--tag de âncora-->
    <a class="cabecalho-menu-item"href="quemSomos.html">Quem Somos</a>
    <a class="cabecalho-menu-item"href="#contato">Contato</a>
    <a class="cabecalho-menu-item"href="<?php $BASE_URL?>admin.php">Administrador</a>
  </nav>	
</header>

<section class="conteudo-principal" id="banner">
  <img class="conteudo-principal-imagem" src="img/banner.jpg" alt="Propaganda base Fenty Beauty"   >
</section>
  
<?php if(isset($printMsg) && $printMsg != ''): ?>
  <p id="msg"><?= $printMsg ?></p>
<?php endif; ?>

<br/>

<div class="row">
  <div class="col-sm-1 col-md-4">
    <img class="imagem-icon" src="img/ico-frete.webp" alt="Imagem ícon de frete">
    <div class="imagem-icon-desc">
      <p>Frete grátis para todo o Brasil</p>
    </div>
  </div>
  <div class="col-sm-1 col-md-4">
    <img class="imagem-icon" src="img/ico-cartao-de-credito.webp" alt="Imagem ícon do cartão">
    <div class="imagem-icon-desc">
      <p>Parcelamos em até 12% s/juros</p>
    </div>
  </div>
  <div class="col-sm-1 col-md-4">
    <img class="imagem-icon" src="img/ico-cadeado.webp" alt="Imagem ícon do cadeado">
    <div class="imagem-icon-desc">
      <p>Compra 100% segura</p>
    </div>
  </div>
</div>

<br/>

<div class="row">
  <div class="col-12">
    <h2 id="main-title">Meus Produtos</h1>
  </div>
</div>

<br/>

<?php if(count($produtos) > 0): ?>
<div class="row">
  <?php foreach($produtos as $produto): ?>
  <div class="col-sm-1 col-md-3">
    <div class="card">
      <img src="<?= $produto["img"] ?>" class="card-img-top">
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
        Nome:<br />
        <input type="text" /><br />
        E-mail:<br />
        <input type="text" /><br />
        Mensagem:<br />
        <textarea> </textarea><br />
              
        <input type="submit" value="Enviar" /> 
              
      </form>
    </div>
  </div>
</div>

<footer class="rodape">
  © 2023 Fn Beauty - Todos os direitos reservados.        
</footer>

<?php
  include_once("templates/footer.php");
?>