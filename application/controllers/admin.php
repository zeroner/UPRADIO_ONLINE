<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('user_agent');
		$this->load->helper('url');
		$this->load->helper('form');
    $this->load->library('form_validation');
	}

	public function index()
	{
		//$this->form_validation->set_rules('username', 'Usuario', 'trim|required');
   	$this->form_validation->set_rules('password', 'Contraseña', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE)
   	{
			if(!$this->session->userdata('logged_in'))
	   	{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/login');
				$this->load->view('admin/templates/footer');
			}
			else {
				redirect('admin/panel', 'refresh');
			}
		}
		else
	  {
	  	redirect('admin/panel', 'refresh');
	  }
	}

	function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('admin/index', 'refresh');
  }

	function check_database($password)
 	{
   	//Field validation succeeded.  Validate against database
   	$username = $this->input->post('username');

   	//query the database
   	$result = $this->users->login($username, $password);

   	if($result)
   	{
     	$sess_array = array();
     	foreach($result as $row)
     	{
       	$sess_array = array(
         	'id' => $row->id,
         	'username' => $row->username
       	);
       	$this->session->set_userdata('logged_in', $sess_array);
     	}
     	return TRUE;
   	}
   	else
   	{
     	$this->form_validation->set_message('check_database', 'Nombre de usuario o contraseña invalidos');
     	return false;
   	}
 	}

	public function panel($page = 'inicio')
	{
		if($this->session->userdata('logged_in'))
   	{
			$session_data = $this->session->userdata('logged_in');
	   	$data['username'] = $session_data['username'];
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/'.$page, $data);
			$this->load->view('admin/templates/footer', $data);
		}
		else
    {
      redirect('admin/index', 'refresh');
    }
	}
}
