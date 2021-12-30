<?php
    declare(strict_types=1);
    
    try{
    $pdo = require 'conectar.php';
    $sql = 'insert into usuarios (usuario, perfil, tel, email, login, senha) values("teste","teste","teste","teste","teste2","teste")';
    $prepare = $pdo->prepare($sql);
    
    $prepare->execute();

    echo $prepare->rowCount();
    }
    catch (PDOException $e){
        echo 'Error: ' . $e->getMessage();
    }
  
    ?>

    