<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <li class="text-center">
        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Index") echo "active-menu"; ?>" href="<?=base_url();?>index.php/admin/panel/inicio">Inicio</a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Integrantes") echo "active-menu"; ?>" href="<?=base_url();?>index.php/admin/panel/integrantes">Integrantes</a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Eventos") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Eventos</a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Redessociales") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Redes Sociales</a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Noticias") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Noticias</a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Podcasts") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Podcasts </a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Programas") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Programas </a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Galeria") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Galeria </a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Blog") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Blog </a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Contacto") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Contacto </a>
      </li>
      <li>
        <a class="<?php if (ucfirst(explode("/", uri_string(current_url()))[1]) == "Configuracion") echo "active-menu"; ?>" href="<?=base_url();?>index.php/homeadmin/integrantes">Configuracion </a>
      </li>
    </ul>
  </div>
</nav>
