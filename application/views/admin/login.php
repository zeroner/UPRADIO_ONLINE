<div id="wrapper">
	<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="admin">UPRadio Admin</a>
		</div>
	</nav>

	<div id="page-wrapper" style="margin: 0 0 0 0; padding: 15px 200px 15px 300px;">
		<div id="page-inner" style="height:100%; min-height: 500px;">
			<div class="row">
				<div class="col-md-12">
					<h2>Panel Administrativo</h2>
					<h5>Este es el area de administracion de la UPRadio Online, para continuar por favor inicia sesion con tu cuenta. </h5>
				</div>
			</div>

			<hr />

			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Formulario de inicio de sesion
						</div>
						<div class="panel-body">
							<?php echo validation_errors(); ?>
							<?php echo form_open('admin/index'); ?>
								<img src="<?=base_url()?>/public/images/avatar.png" class="user-image img-responsive" style="width: 120px; height: 120px; margin: 0 auto 10px; display: block; -moz-border-radius: 50%; -webkit-border-radius: 50%; border-radius: 50%;"/>
								<div class=" form-group input-group">
									<span class="input-group-addon">@</span>
									<input type="email" name="username" class="form-control" placeholder="Nombre de Usuario o Correo" />
								</div>
								<div class=" form-group input-group">
									<span class="input-group-addon">#&nbsp;</span>
									<input type="password" name="password" class="form-control" placeholder="Contraseña" />
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="" />Recordar mis datos.
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
							</form>
						</div>
					</div>
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
