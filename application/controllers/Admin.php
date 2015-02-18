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
      $nome = $this->session->userdata('nome') ? $this->session->userdata('nome') : $this->session->userdata('usuario');

      $this->load->view('admin/header');
      $this->load->view('admin/sidebar');
      $this->load->view('admin/index');
      $this->load->view('admin/footer');
  }

}
