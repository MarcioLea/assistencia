<?php
   declare(strict_types=1);
   try{
    $pdo = require 'conectar.php';
    $sql = 'select  * from usuarios';
    $result = $pdo->query($sql);

    echo '<h3>Usuários: </h3>';
    
        
      echo '<div class="table-responsive">';
      echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Perfil</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Login</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>';
  
    foreach ($pdo->query($sql) as $key => $value){
     echo '<tbody>';
     echo '<tr>';
     echo '<td>'. $value['iduser'] .'</td>';
     echo '<td>'. $value['usuario'] .'</td>';
     echo '<td>'. $value['perfil'] .'</td>';
     echo '<td>'. $value['tel'] .'</td>';
     echo '<td>'. $value['email'] .'</td>';
     echo '<td>'. $value['login'] .'</td>';
     echo '<td>'. $value['senha'] .'</td>';
     echo '</tr>';
     
   }
  }
  catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
  }
   echo '</div>';
?>
  
