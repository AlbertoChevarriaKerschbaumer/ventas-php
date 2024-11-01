<?php
session_start();
if (isset($_SESSION['session_email'])){
  $email_sesion=$_SESSION['session_email'];
  $sql="SELECT * FROM usuarios where email='$email_sesion'";
  $query=$pdo->prepare($sql);
  $query->execute();
  $usuarios=$query->fetchAll(fetch_Style: PDO:: FETCH_ASSOC); 
  foreach($usuarios as $usuario){
    $nombres_sesion=$usuario['nombres'];
  }
}
else{
echo "no hay sesion activa";
header('location:'.$URL.'/login');
}
?>