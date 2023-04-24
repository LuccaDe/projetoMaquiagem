<?php
    include_once("templates/header.php")
?>

<h1> PÁGINA DE ADIÇÃO DE PRODUTOS NO BANCO DE DADOS </h1>

</br>

<nav class="navbar">
    <h5>NAVEGAÇÃO PROVISÓRIA</h5>
    <a href="<?php $BASE_URL?>index.php">INDEX</a>
    <a href="<?php $BASE_URL?>create.php">CADASTRO DE PRODUTOS</a>
    <a href="<?php $BASE_URL?>painel.php">EDIÇÃO E EXCLUSÃO DE PRODUTOS</a>
</nav>

<h1>Cadastrar Produto</h1>

    <form action="<?= $BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create"></input>

        <div class="form-group">
            <label for="nome-produto">Nome do produto:</label>
            <input class="form-control" type="text" name="nome" id="nome-produto">
        </div>

        <div class="form-group">
            <label for="valor-produto">Valor(R$):</label>
            <input class="form-control" type="number" name="valor" id="valor-produto">
        </div>

        <div class="form-group">
            <label for="img-produto">Imagem do produto (URL):</label>
            <input class="form-control" type="text" name="img" id="img-produto">
        </div>

            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
    </form>

<?php
    include_once("templates/footer.php")
?>