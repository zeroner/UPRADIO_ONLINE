<?php
class Pages extends CI_Controller {
  public function view($page = 'home'){
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
      show_404();
    }

    $data['title'] = ucfirst($page); //Convertir en mayuscula la primera letra

    $this->load->view('templates/header', $data);
    if($page == 'home'){
      $this->load->view('sections/head_menu.php');
      $this->load->view('sections/intro.php');
      $this->load->view('sections/player.php');
      $this->load->view('sections/eventos.php');
      $this->load->view('sections/redes_sociales.php');
      $this->load->view('sections/integrantes.php');
      $this->load->view('sections/nosotros.php');
      $this->load->view('sections/podcast.php');
      $this->load->view('sections/programas.php');
      $this->load->view('sections/eventos_detalles.php');
      $this->load->view('sections/galeria.php');
      $this->load->view('sections/noticias.php');
      $this->load->view('sections/contacto.php');
      //$this->load->view('pages/'.$page, $data);
    }
    $this->load->view('templates/footer', $data);

  }
}
?>
