<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
  
  public function __construct(){
    parent:: __construct();
    $this->load->helper(array('getmenu', 'url'));
    $this->load->model('Users');
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
    $data['menu'] = main_menu();
    if($this->Users->crear_usuarios($datos)){
      $data['msg'] = "Datos Registrados correctamente";
      $this->load->view('pages/registro', $data);
    }else {
      $data['msg'] = "Error en intentar registrar los datos";
      $this->load->view('pages/registro', $data);
    }

  }
}
