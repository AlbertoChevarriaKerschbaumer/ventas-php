<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
include ('../app/controlers/usuarios/listado_usuarios.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
          <div class="col-12">
            <h1 class="m-0">Listado de Usuarios</h1>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-8">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Listado de Usuarios</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col">Nro</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($usuarios_datos as $usuario_dato){ ?>
                      <tr>
                       <td> <?php echo $usuario_dato['nombres'];  ?></td>
                      </tr>
                 <?php }
                ?>
                </tbody>
            </table>
              </div>
              <!-- /.card-body -->
            </div>
       
      </div><!-- /.container-fluid -->
        </div>
      </div>   
    </div>
  </div>
<?php
  include ('../layout/parte2.php');
?>