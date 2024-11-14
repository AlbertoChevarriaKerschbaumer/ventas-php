<?php
include ('app/config.php');//conexion de BD
include ('layout/sesion.php');//activa y verifica que la sesion exista 
include ('layout/parte1.php');//mostrar encabezado y cuerpo de pagina inicial
// include ('layout/cerrar_sesion.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
          <div class="col-12">
            <h1 class="m-0">Bienvenidos al Sistema de Ventas</h1>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
    <div class="content">
      <div class="container-fluid">
       
         <p>Contenido</p> 
       
      </div><!-- /.container-fluid -->
    </div>
  </div>
<?php
  include ('layout/parte2.php');//pie de pagina inicial
?>