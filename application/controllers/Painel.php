<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

  public function __construct()
  {

      parent::__construct();

      // Carrega o helper session_helper..
      $this->load->helper('session_helper');

      check_session_painel();
      
  }
  
  public function index()
  {
      
      // Exibir o formulário principal de entrada
      // ao painel..
      $this->load->view('painel-index');
      
  }

  public function gerar($senha){

      for ($i = 0; $i < 10; $i++)
      {

          $senha = md5($senha);

      }
      echo $senha;

  }
  
	public function entrar()
	{

      // Verificando se o post foi submetido...
      if($this->input->post('entrar'))
      {
          
          // Definindo regras de validação...
          $this->form_validation->set_rules('usuario', '<strong>usuário</strong>', 'required|trim|min_length[6]|max_length[50]');
          $this->form_validation->set_rules('senha', '<strong>senha</strong>', 'required|trim|min_length[6]');

          // Verificando se o formulário foi validado..
          if($this->form_validation->run() === TRUE)
          {
              
              // Criptografa a senha 10 vezes..
              $senha = $this->input->post('senha');
              for ($i = 0; $i < 10; $i++)
              {

                  $senha = md5($senha);

              }              

              // Organizando o where da busca no banco de dados.
              $where = array(
                  "usuario" => $this->input->post('usuario'),
                  "senha"   => $senha
              );

              // Executando a função do model, passando como parâmetro
              // o nome da tabela e a cláusula where.
              $usuario = $this->crud_model->retrieve ('usuarios', $where);

              // Verificando se foi retornado algum resultado..
              if($usuario)
              {                 

                  // Aqui estamos apenas armazenando as informações do usuário
                  // que vem no primeiro indice do array após feito o retrieve no model...
                  $usuario = $usuario[0];

                  // Verificando se o usuário está bloqueado de acessar o painel...
                  if( ! $usuario["bloqueado"])
                  {

                      // Loop em todos os campos...
                      foreach ($usuario as $campo => $valor)
                      {

                          // Impede que a senha seja armazenada na sessão
                          if ($campo !== "senha")
                          {

                              // Criptografa o ID do usuário
                              // antes de ser armazenado na
                              // sessão..
                              if ($campo === "id")
                              {

                                  $config_sessao[$campo] = $this->encrypt->encode($valor);

                              }
                              else
                              {
                                  // Apenas configura para que seja adicionado
                                  // este campo na sessão..
                                  $config_sessao[$campo] = $valor;

                              }

                          }

                      }

                      // Ajustando um campo adicional para checagem
                      // da sessão..
                      $config_sessao['logado'] = TRUE;                      
                      
                      // Atualiza a sessão..
                      $this->session->set_userdata($config_sessao);
      
                      // Redireciona para o painel de administração...
                      redirect('admin');

                  }
                  else
                  {

                      // Mensagem que vai ser armazenada na sessão temporária
                      $mensagem = array(
                        "mensagem"  => "<strong>Usuário sem acesso ao sistema!</strong>",
                        "class"     => "card-panel red darken-1 red-text text-lighten-4"
                      );

                      // Inicia a sessão temporária
                      $this->session->set_flashdata('mensagem', $mensagem);

                      // Redireciona para o formulário...
                      redirect('painel'); 

                  }

              }
              else
              {

                  // Mensagem que vai ser armazenada na sessão temporária
                  $mensagem = array(
                    "mensagem"  => "<strong>Dados inválidos!</strong>",
                    "class"     => "card-panel red darken-1 red-text text-lighten-4"
                  );

                  // Inicia a sessão temporária
                  $this->session->set_flashdata('mensagem', $mensagem);

                  // Redireciona para o formulário...
                  redirect('painel'); 

              }

          }
          else
          {

              // Mensagem que vai ser armazenada na sessão temporária
              $mensagem = array(
                "mensagem"  => "<strong>Falha na validação do formulário!</strong><br>". validation_errors(),
                "class"    => "card-panel red darken-1 red-text text-lighten-4"
              );

              // Inicia a sessão temporária
              $this->session->set_flashdata('mensagem', $mensagem);

              // Redireciona para o formulário...
              redirect('painel');

          }

      }
      
	}
	
	public function sair()
	{
      // Finaliza a sessão utilizando o helper
      // session_helper..
      logout_session();

	}

}
