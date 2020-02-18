<?php
class Users extends CI_model{
  function __construct(){
    $this->load->database();
  }
  public function crear_usuarios($datos){
    if(!$this->db->insert('usuarios', $datos)){
      return false;
    }
    return true;
  }
}