<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $query = "SELECT * FROM produtos";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $produtos = $stmt->fetchAll();

?>