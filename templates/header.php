<?php
    include_once('config/url.php');
    include_once("config/process.php");


    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }    
?>

<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Maquiagens</title>

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!--Css-->
        <link rel="stylesheet" href="css/style.css">

        

    </head>

    <body>
        <div class="container">
            