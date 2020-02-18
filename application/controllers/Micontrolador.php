<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Micontrolador extends CI_Controller {

  function index(){
    $dato['colores'] = array('rojo','azul','verde');
    $this->load->view('/pages/about', $dato);
  }

}