<?php
include ("../../config.php");
$nombres=$_POST['nombres'];
$email=$_POST['email'];
$password_user=$_POST['password_user'];

$sql_usuarios="INSERT INTO usuarios (nombres, email, password_usuario) values ('$nombres','$email','$password_user')";
$query_usuarios=$pdo->prepare($sql_usuarios);
$query_usuarios->execute();
//$usuarios_datos=$query_usuarios->fetchAll(fetch_Style: PDO:: FETCH_ASSOC); 
if ($sql_usuarios){
    echo "los datos han sido registrados correctamente";
}else{
    echo "los datos no han sido registrados";
}

?>