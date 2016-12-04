<div id="wrapper">
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin/index">UPRadio Admin</a>
    </div>
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
      Ultima conexion : 30 May 2014 &nbsp;
      <a href="<?php echo base_url(); ?>index.php/admin/logout" class="btn btn-danger square-btn-adjust">Logout</a>
    </div>
  </nav>

  <?php $this->load->view('admin/menu');?>

  <div id="page-wrapper" style="margin: 0 0 0 0; padding: 15px 200px 15px 300px;">
    <div id="page-inner" style="height:100%; min-height: 500px;">
      <div class="row">
        <div class="col-md-12">
          <h2><?php if(ucfirst(explode("/", uri_string(current_url()))[1]) == "Index") echo "Inicio";?></h2>
          <h4>Benvenido <?php echo $username; ?>!</h4>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php
          // if ($this->agent->is_browser())
          // {
          //         $agent = $this->agent->browser().' '.$this->agent->version();
          // }
          // else
          // {
          //         $agent = 'Unidentified User Agent';
          // }
          //
          // echo $agent;
          //
          // echo $this->agent->platform();
          //
          // $ip = $this->input->ip_address();
          // echo $ip;
          ?>
        </div>
        <div class="col-md-3"></div>
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
