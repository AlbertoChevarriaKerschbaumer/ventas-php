<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','ventas');
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try {
$pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
// echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
echo "Error al conectar a la base de datos";
}
$URL='http://localhost/sistema-ventas/';


?>