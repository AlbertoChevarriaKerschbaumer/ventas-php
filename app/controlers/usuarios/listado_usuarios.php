<?php

//include('../../config.php');
  $sql_usuarios="SELECT * FROM usuarios";
  $query_usuarios=$pdo->prepare($sql_usuarios);
  $query_usuarios->execute();
  $usuarios_datos=$query_usuarios->fetchAll(fetch_Style: PDO:: FETCH_ASSOC); 
?>