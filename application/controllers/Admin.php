<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {

      parent::__construct();

      // Carrega o helper session_helper..
      $this->load->helper('session_helper');

      check_session_admin();
      
  }
  
  public function index()
  {
      echo 'Usuário autenticado com sucesso! Olá: ';
      echo  $this->session->userdata('nome') ? $this->session->userdata('nome') : $this->session->userdata('usuario');

      echo '<br>';

      var_dump($this->session->userdata());
  }

}
