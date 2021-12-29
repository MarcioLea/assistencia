<?php

    declare(strict_types=1);

    $conn = null;

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=banco', 'root', '');
    } catch (Exception $e) {
       echo $e->getMessage();
       exit();
    }

    return $conn;
?>