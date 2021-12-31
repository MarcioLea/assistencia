<?php
    declare(strict_types=1);

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
       
    $pdo = require 'conectar.php';
    $sql = 'insert into clientes (nomecli, endcli, emailcli, cpf, telcli) values(?, ?, ?, ?, ?)';
    $prepare = $pdo->prepare($sql);

    $prepare->bindParam(1, $nome);
    $prepare->bindParam(2, $endereco);
    $prepare->bindParam(3, $email);
    $prepare->bindParam(4, $cpf);
    $prepare->bindParam(5, $telefone);
            
    $prepare->execute();

    echo $prepare->rowCount();
   
  
    ?>
