<?php
    include_once("templates/header.php")
?>

<h1> PÁGINA DE ADIÇÃO DE PRODUTOS NO BANCO DE DADOS </h1>

</br>

<h5>NAVEGAÇÃO PROVISÓRIA</h5>
<a href="<?php $BASE_URL?>index.php">INDEX</a>

<h1>Adicionar Produto</h1>

<form>
    <div class="form-group">
        <label for="nome-produto">Nome do produto:</label>
        <input class="form-control form-control" type="text" name="nome-produto" id="nome-produto"></input>
    </div>

    <div class="form-group">
        <label for="valor-produto">Valor(R$):</label>
        <input class="form-control" type="number" name="valor-produto" id="valor-produto"></input>
    </div>

    <div class="form-group">
        <label for="img-produto">Imagem do produto (URL):</label>
        <input class="form-control" type="text" name="img-produto" id="img-produto"></input>
    </div>
</form>

<?php
    include_once("templates/footer.php")
?>