<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
  
  public function __construct(){
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->model('Users');

    $this->load->library(array('form_validation'));
  }
  
	public function index(){
    $data['menu'] = main_menu();
		$this->load->view('pages/registro', $data);
  }
  
  public function create(){
    $data['menu'] = main_menu();
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $password_c = $this->input->post('password_confirm');

    $datos = array(
      'nombre_usuario' => $username,
      'correo' => $email,
      'contrasena' => $password,
      'status' => 1,
      'range' => 2
    );

    $config = array(
      array(
        'field' => 'username',
        'label' => 'Nombre de Usuario',
        'rules' => 'required|alpha_numeric'
      ),
      array(
        'field' => 'email',
        'label' => 'Correo',
        'rules' => 'required|valid_email',
        'errors' => array(
                'required' => 'El %s es invalido.',
        ),
      )
    );

    $this->form_validation->set_rules($config);

    if ($this->form_validation->run() == FALSE)
      {
        $data['msg'] = "Error en intentar registrar los datos";
        $this->load->view('pages/registro', $data);
      }
      else
      {
        $this->Users->crear_usuarios($datos);
        $data['msg'] = "Datos Registrados correctamente";
        $this->load->view('pages/registro', $data);
      }
  }
}
