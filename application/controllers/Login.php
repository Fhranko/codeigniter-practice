<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct(){
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->library(array('form_validation'));
  }

	public function index(){
    $data['menu'] = main_menu();
		$this->load->view('pages/login', $data);
  }
  
  public function validate(){
    $data['menu'] = main_menu();
    $correo = $this->input->post('correo');
    $contrasena = $this->input->post('contrasena');

    $config = array(
      array(
        'field' => 'correo',
        'label' => 'Correo',
        'rules' => 'required|valid_email',
        'errors' => array(
          'required' => 'El $s es requerido',
          'valid_email' => 'El formato de $s es invalido'
        ),
      ),
      array(
        'field' => 'contrasena',
        'label' => 'Contrasena',
        'rules' => 'required',
        'errors' => array(
          'required' => 'La %s es requerida.',
        ),
      )
    );

    $this->form_validation->set_rules($config);

    if ($this->form_validation->run() == FALSE){
      $data['mensaje'] = 'No se ha podido ingresar';
      $this->load->view('pages/login', $data);
    }
    else{
      $data['mensaje'] = 'Ingresado';
      $this->load->view('pages/login', $data);
    }
  }
}
