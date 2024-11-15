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
       <div class="row">
        <div class="col-8">  
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Usuarios Registrados</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block" >
              <table class="table table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
<?php
  include ('layout/parte2.php');//pie de pagina inicial
?>