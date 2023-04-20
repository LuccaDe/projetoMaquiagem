<?php 

    session_start();

    include_once("connention.php");
    include_once("url.php");

    $query = "SELECT * FROM produtos";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $produtos = $stmt->fetchAll();

?>