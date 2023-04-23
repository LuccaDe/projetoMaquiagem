<?php
    include_once("templates/header.php")
?>

<h1 class="titulo-pagina-admin"> PÁGINA DO ADMINISTRADOR DO SITE </h1>

</br>

<a class="menu-item-home"href="<?php $BASE_URL?>index.php"> IR PARA HOME</a>

<form class="form-inline">
    <input class="form-control mr-2" type="text" placeholder="Digite seu usuário">
    <input class="form-control mr-2" type="password" placeholder="Digite sua senha">
    <a href="<?php $BASE_URL?>adminPass.php"><input class="btn btn-outline-primary btn-rosa-admin" type="button" value="Login"></a>
</form>

<?php
    include_once("templates/footer.php")
?>