<?php

   declare(strict_types=1);

    $listar = require 'conectar.php';
    $sql = 'select  * from clientes';
    $result = $listar->query($sql);

    echo '<h3>Clientes: </h3>';
    
    if($conn){
      echo '<div class="table-responsive">';
      echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">E-mail</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>';
  
    foreach ($listar->query($sql) as $key => $value){
     echo '<tbody>';
     echo '<tr>';
     echo '<td>'. $value['idcli'] .'</td>';
     echo '<td>'. $value['nomecli'] .'</td>';
     echo '<td>'. $value['endcli'] .'</td>';
     echo '<td>'. $value['emailcli'] .'</td>';
     echo '<td>'. $value['cpf'] .'</td>';
     echo '<td>'. $value['telcli'] .'</td>';
    echo '</tr>';
     
   }
   echo '</div>';
}
  