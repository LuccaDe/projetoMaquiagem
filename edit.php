<?php
    include_once("templates/header.php")
?>

<h1> PÁGINA DE EDIÇÃO DE PRODUTOS NO BANCO DE DADOS </h1>

</br>

<nav class="navbar">
    <h5>NAVEGAÇÃO PROVISÓRIA</h5>
    <a href="<?php $BASE_URL?>index.php">INDEX</a>
    <a href="<?php $BASE_URL?>create.php">CADASTRO DE PRODUTOS</a>
    <a href="<?php $BASE_URL?>painel.php">EDIÇÃO E EXCLUSÃO DE PRODUTOS</a>
</nav>

<h1>Editar Produto</h1>

    <form action="<?= $BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">

        <div class="form-group">
            <label for="nome-produto">Nome do produto:</label>
            <input class="form-control form-control" type="text" name="nome" id="nome-produto" value="<?= $produto['nome']?>">
        </div>

        <div class="form-group">
            <label for="valor-produto">Valor(R$):</label>
            <input class="form-control" type="number" name="valor" id="valor-produto" value="<?= $produto['valor']?>">
        </div>

        <div class="form-group">
            <label for="img-produto">Imagem do produto (URL):</label>
            <input class="form-control" type="text" name="img" id="img-produto" value="<?= $produto['img']?>">
        </div>

            <button type="submit" class="btn btn-outline-primary">Atualizar</button>
    </form>

<?php
    include_once("templates/footer.php")
?>