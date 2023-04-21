<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;

    if(!empty($_GET)) {
       $id = $_GET["id"];
    }
  
    if(!empty($id)) {
  
      $query = "SELECT * FROM produtos WHERE id = :id";
  
      $stmt = $conn->prepare($query);
  
      $stmt->bindParam(":id", $id);
  
      $stmt->execute();
  
      $produto = $stmt->fetch();
   
    } else {
     
      $produtos = [];
  
      $query = "SELECT * FROM produtos";
  
      $stmt = $conn->prepare($query);
  
      $stmt->execute();
       
      $produtos = $stmt->fetchAll();
  
    }
  
    $conn = null;
  
?>