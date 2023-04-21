<?php
    include_once("templates/header.php")
?>

<h1> PÁGINA DO ADMINISTRADOR DO SITE </h1>

</br>

<h5>NAVEGAÇÃO PROVISÓRIA</h5>
<a href="<?php $BASE_URL?>index.php">INDEX</a>

<form class="form-inline">
    <input class="form-control mr-2" type="text" placeholder="Digite seu usuário">
    <input class="form-control mr-2" type="password" placeholder="Digite sua senha">
    <a href="<?php $BASE_URL?>create.php"><input class="btn btn-primary" type="button" value="Logar"></a>
</form>

<?php
    include_once("templates/footer.php")
?>