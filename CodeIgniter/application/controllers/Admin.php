<?php
class Admin extends CI_Controller {
  public function view($page = 'index'){
    if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
      show_404();
    }

    $data['title'] = ucfirst($page);

    $this->load->view('templates/header', $data);
    $this->load->view('admin/'.$page, $data);
    $this->load->view('templates/footer', $data);
  }
}
?>
