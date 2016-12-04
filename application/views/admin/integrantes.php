<div id="wrapper">
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">UPRadio Admin</a>
    </div>
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
      Ultima conexion: 30 May 2014 &nbsp;
      <a href="<?=base_url()?>index.php/homeadmin/logout" class="btn btn-danger square-btn-adjust">Logout</a>
    </div>
  </nav>

  <?php $this->load->view('admin/menu');?>

  <div id="page-wrapper" style="margin: 0 0 0 0; padding: 15px 200px 15px 300px;">
    <div id="page-inner" style="height:100%; min-height: 500px;">
      <div class="row">
        <div class="col-md-12">
          <h2><?php echo ucfirst(explode("/", uri_string(current_url()))[1]);?></h2>
          <h4>Benvenido <?php echo $username; ?>!</h4>
        </div>
      </div>

      <hr />

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Inserta o modifica un usuario
            </div>
            <div class="panel-body">
              <?php echo form_open('admin/insertar'); ?>
              <div class="row">
                <div class="col-md-2">
                  <div class="row">
                    <div class="col-md-12">
                      <img src="#" id="blah" alt="Foto de perfil" width="120" height="140">
                      <br><br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                    <style>
                    .btn-file {
                      position: relative;
                      overflow: hidden;
                    }

                    .btn-file input[type=file] {
                      position: absolute;
                      top: 0;
                      right: 0;
                      min-width: 100%;
                      min-height: 100%;
                      font-size: 100px;
                      text-align: right;
                      filter: alpha(opacity=0);
                      opacity: 0;
                      outline: none;
                      background: white;
                      cursor: inherit;
                      display: block;
                    }
                    </style>
                    <div class="input-group">
                      <label class="input-group-btn">
                        <span class="btn btn-primary">
                          Cambiar Foto...<input type="file" name="foto" id="imgInp" style="display: none;" multiple>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nombre(s):</label>
                    <input class="form-control" name="nombres" type="text"/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input class="form-control" name="apellido_p" type="text"/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Apellido Paterno:</label>
                    <input class="form-control" name="apellido_m" type="text"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" name="email" type="email"/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input class="form-control" name="pass" type="password"/>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Fecha:</label>
                    <input class="form-control" name="fecha_n" type="date"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>URL de Facebook:</label>
                    <input class="form-control" name="url_fb" type="text"/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>URL de Twitter:</label>
                    <input class="form-control" name="url_tw" type="text"/>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>URL de Google+:</label>
                    <input class="form-control" name="url_gm" type="text"/>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Descripcion:</label>
                    <textarea class="form-control" name="descripcion" rows="3"></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Privilegios:</label>
                        <select class="form-control" name="privileges">
                          <option value="0">0.Administrador</option>
                          <option value="1">1.Locutor</option>
                          <option value="2">2.Columnista</option>
                          <option value="3">3.Asistente</option>
                          <option value="4">4.Moderador</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        Tabla de usuarios
      </div>
      <div class="panel-body">
        <div>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>id</th>
                <th>Nombre(s)</th>
                <th>Apellidos</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Google+</th>
                <th>Privilegios</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $array_users = $this->users->get_users();

              foreach($array_users->result() as $user)
              {
                echo "<tr class='odd gradeX'>";
                echo "<td>".$user->id."</td>";
                echo "<td>".$user->nombres."</td>";
                echo "<td>".$user->apellido_p." ".$user->apellido_m."</td>";
                echo "<td><a href='".$user->url_fb."' target='_blank'>Enlace</a></td>";
                echo "<td><a href='".$user->url_tw."' target='_blank'>Enlace</a></td>";
                echo "<td><a href='".$user->url_gm."' target='_blank'>Enlace</a></td>";
                switch($user->privileges){
                  case 0:
                  echo "<td>0.Administrador</td>";
                  break;
                  case 1:
                  echo "<td>1.Locutor</td>";
                  break;
                  case 2:
                  echo "<td>2.Columnista</td>";
                  break;
                  case 3:
                  echo "<td>3.Asistente</td>";
                  break;
                  case 4:
                  echo "<td>4.Moderador</td>";
                  break;
                }

                echo "<td><a href='#'>Editar</a></td>";
                echo "<td><a href='#'>Eliminar</a></td>";

                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h3>Informacion acerca del Panel Administrativo</h3>
    <p>
      Esta area de administracion esta restringida solo para el personal administrativo de la Estacion de Radio Online de la Universidad Politecnica de Gomez Palacio, en caso de no ser parte de este personal administrativo se le invita a dar click al siguiente <a href="<?=base_url()?>" target="_blank">enlace</a> para volver a la pagina principal del sitio, gracias por su confianza.
    </p>
  </div>
</div>
</div>
</div>
</div>
