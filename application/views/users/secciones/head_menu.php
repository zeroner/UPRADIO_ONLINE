<!-- HEADER -->
    <header id="jHeader">
      <nav class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#anchor00"><img src="<?=base_url()?>public/images/logo/letras_logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
          <ul class="nav navbar-nav navbar-right">
            <?php
            foreach ($menus as $m) {
              if(explode("/", $m)[0] == "Inicio")
                echo "<li class='active'><a href='#anchor".explode("/", $m)[1]."'>".explode("/", $m)[0]."</a></li>";
              else
                echo "<li><a href='#anchor".explode("/", $m)[1]."'>".explode("/", $m)[0]."</a></li>";
            }
            ?>
          </ul>
        </div>

      </nav>
    </header>
