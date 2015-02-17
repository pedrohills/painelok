<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

  public function __construct()
  {

      // Verifica e atualiza a sessão utilizando
      // o helper session_helper..
      check_session(TRUE);
      
  }
  
  public function index()
  {
  
      // Exibir o formulário principal de entrada
      // ao painel..
      
  }
  
	public function entrar()
	{
	
      // Apenas receber o submit do formulário
      // e aplicar as regras de negócio..
      
	}
	
	public function sair()
	{
      // Finaliza a sessão utilizando o helper
      // session_helper..
      logout_session();

	}

}
