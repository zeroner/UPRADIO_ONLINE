<!-- FEATURED ARTIST -->
<?php
  $array_users = $this->users->get_users();
?>
    <section class="section featured-artists" id="anchor01">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="voffset70"></div>
            <div class="separator-icon">
              <i class="fa fa-microphone"></i>
            </div>
            <div class="voffset30"></div>
            <p class="pretitle">Conoce a los artistas creadores de nuestro contenido</p>
            <div class="voffset20"></div>
            <h2 class="title">Integrantes de la estacion</h2>
            <div class="voffset80"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="voffset20"></div>
            <div class="js-flickity" data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: false }">
              <?php
              foreach($array_users->result() as $user)
              {
                echo "<div class='gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3'>";
                  echo "<div class='featured-artist'>";
                    echo "<div class='image'>";
                        echo "<img src='".base_url()."public/images/demo/artists/".$user->foto."' alt=''>";
                    echo "</div>";
                    echo "<div class='rollover'>";
                        echo "<ul class='social'>";
                          echo "<li><a href='".$user->url_fb."' target='_blank'><i class='fa fa-facebook'></i></a></li>";
                          echo "<li><a href='".$user->url_tw."' target='_blank'><i class='fa fa-twitter'></i></a></li>";
                          echo "<li><a href='".$user->url_gm."' target='_blank'><i class='fa fa-google'></i></a></li>";
                        echo "</ul>";
                        echo "<div class='text'>";
                          echo "<h4 class='title-artist'>".$user->nombres."<br>".$user->apellido_p."</h4>";
                          echo "<p>".$user->descripcion."</p>";
                        echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              }
              ?>
            </div>
          </div>
        </div>
        <div class="voffset120"></div>
      </div>
    </section>
