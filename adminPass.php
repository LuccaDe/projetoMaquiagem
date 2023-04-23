<?php
    include_once("templates/header.php")
?>

<h1 class="pagina-edicao-produtos"> PÁGINA DO ADMINISTRADOR DO SITE </h1>

</br>

<nav class="navbar">
    <a class= "menu-item-pagina-admin" href="<?php $BASE_URL?>index.php">HOME</a>
    <a class= "menu-item-pagina-admin" href="<?php $BASE_URL?>create.php">CADASTRO DE PRODUTOS</a>
    <a class= "menu-item-pagina-admin" href="<?php $BASE_URL?>painel.php">EDIÇÃO E EXCLUSÃO DE PRODUTOS</a>
</nav>

<?php
    include_once("templates/footer.php")
?>