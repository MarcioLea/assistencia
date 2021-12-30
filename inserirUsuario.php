<?php
    declare(strict_types=1);

    $usuario = $_POST['usuario'];
    $perfil = $_POST['perfil'];
    $tel = $_POST['telefone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $pdo = require 'conectar.php';
    $sql = 'insert into usuarios (usuario, perfil, tel, email, loginUsuario, senha) values(?, ?, ?, ?, ?, ?)';
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(1, $usuario);
    $prepare->bindParam(2, $perfil);
    $prepare->bindParam(3, $tel);
    $prepare->bindParam(4, $email);
    $prepare->bindParam(5, $login);
    $prepare->bindParam(6, $senha);
        
    $prepare->execute();

    echo $prepare->rowCount();
   
  
    ?>

    