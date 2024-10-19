<?php
include ('../../config.php');
$email=$_POST['email'];
$password_user=$_POST['password_user'];
$contador=0;
$sql="SELECT * FROM usuarios WHERE email='$email' AND password_usuario='$password_user'";
$query=$pdo->prepare($sql);
$query->execute();
$usuarios=$query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
foreach($usuarios as $usuario){
$contador=$contador+1;
$email_table=$usuario['email'];
$nombres=$usuario['nombres'];
}
if ($contador==0){
    echo "datos incorrectos";
}else{
    echo "datos correctos"; 
    session_start();
    $_SESSION['session_email']=$email;
    header('location:'.$URL.'/login');
}
?>