<?php
include ('../app/config.php');
include ('../layout/sesion.php');
include ('../layout/parte1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
          <div class="col-12">
            <h1 class="m-0">Registro de Usuario</h1>
          </div><!-- /.col -->
      </div><!-- /.container-fluid -->
    <div class="content">
      <div class="container-fluid">
       
         <div class="row">
        <div class="col-8">  
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Ingresa Datos</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block" >
              <div class="row">
                <div class="col-md-12">
                <form action="../app/controlers/usuarios/create.php" method="post">
                    <div class="form-group">

                    <div class="mb-3">
                      <label for="" class="form-label">Nombres</label>
                      <input type="text" name="nombres" class="form-control" placeholder="Ingrese Nombre">
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Ingrese Email">
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password" name="password_user" class="form-control">
                    </div>

                  <a class="btn btn-secondary">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
       
      </div><!-- /.container-fluid -->
    </div>
  </div>
<?php
  include ('../layout/parte2.php');
?>