<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($data)){

        if($data["type"] === "create") {

            $nome = $data["nome"];
            $valor = $data["valor"];
            $img = $data["img"];
      
            $query = "INSERT INTO produtos (nome, valor, img) VALUES (:nome, :valor, :img)";
      
            $stmt = $conn->prepare($query);
      
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":valor", $valor);
            $stmt->bindParam(":img", $img);
      
            try {
      
              $stmt->execute();
              $_SESSION["msg"] = "Produto cadastrado com sucesso!";
         
            } catch(PDOException $e) {
              $error = $e->getMessage();
              echo "Erro: $error";
            }
      
          }
      
          header("Location:" . $BASE_URL . "../index.php");
    
    }else{

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
    }
        $conn = null;
  
?>