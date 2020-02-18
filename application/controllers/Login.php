<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __constructor(){
    parent:: __constructor();
    $this->load->helper(array('getmenu', 'url'));
  }

	public function index(){
    $data['menu'] = main_menu();
		$this->load->view('pages/login', $data);
	}
}
