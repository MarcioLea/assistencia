<?php

   declare(strict_types=1);

    $listar = require 'conectar.php';
    $sql = 'select  * from os';
    $result = $listar->query($sql);

    echo '<h3>Clientes: </h3>';
    
    if($conn){
      echo '<div class="table-responsive">';
      echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Data</th>
      <th scope="col">Equipamento</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Nº de série</th>
      <th scope="col">Estado</th>
      <th scope="col">Defeito </th>
      <th scope="col">Técnico</th>
      <th scope="col">Laudo técnico</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>';
  
    foreach ($listar->query($sql) as $key => $value){
     echo '<tbody>';
     echo '<tr>';
     echo '<td>'. $value['idos'] .'</td>';
     echo '<td>'. $value['data_os'] .'</td>';
     echo '<td>'. $value['equipamento'] .'</td>';
     echo '<td>'. $value['marca'] .'</td>';
     echo '<td>'. $value['modelo'] .'</td>';
     echo '<td>'. $value['n_serie'] .'</td>';
     echo '<td>'. $value['estado'] .'</td>';
     echo '<td>'. $value['defeito'] .'</td>';
     echo '<td>'. $value['rt'] .'</td>';
     echo '<td>'. $value['laudo'] .'</td>';
     echo '<td>'. $value['valor'] .'</td>';
    echo '</tr>';
     
   }
   echo '</div>';
}
  