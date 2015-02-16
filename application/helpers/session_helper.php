<?php

  // Verifica se o usuário está logado
  function check_session($update = FALSE)
  {
      // Instancia da classe principal do CodeIgniter
      $CI =& get_instance();      
      
      // Verifica se o usuário está logado..
      if ($CI->session->userdata("logado"))
      {

          // Verifica se será necessário atualizar a sessão..
          if( ! $update) return;
          
          // Atualiza a sessão..
          update_session();

      }
      else
      {

          // Redireciona para o logout caso não esteja logado, em seguida
          // será redirecionado para o formulário de login..
          logout_session();

      }
  }
  
  function update_session()
  {
  
      // Instancia da classe principal do CodeIgniter
      $CI =& get_instance();
  
      // ID do usuário criptografado na sessão
      $encoded_user_id = $CI->session->userdata("id");
      
      // ID do usuário recuperado anteriormente sendo
      // descriptografado utilizando o helper encrypt
      // do CodeIgniter
      $decoded_user_id = (int) $CI->encrypt->decode($encoded_user_id);
      
      // Clausula para resgatar as informações do usuário
      $where = array ("id" => $decoded_user_id);  
      
      // Pegando as informações do usuário no banco de dados
      $user_info = $CI->crud_model->get ($where_array);
      
      // Verificando se retornou algum valor
      if ($user_info)
      {
      
        // Aqui estamos apenas armazenando as informações do usuário
        // que vem no primeiro indice do array após feito o get do model...
        $user_info = $user_info[0];
        
        // Verificando se o usuário está bloqueado de acessar o painel...
        if ($user_info["banned"])
        {
        
            // Loop em todos os campos...
            foreach ($user_info as $campo => $valor)
            {

                // Impede que a senha seja armazenada na sessão
                if ($campo !== "senha")
                {
                    // Criptografa o ID do usuário
                    // antes de ser armazenado na
                    // sessão..
                    if ($campo === "id")
                    {

                        $config_sessao[$campo] = $CI->encrypt->encode($valor);

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
            $config_sessao['logado'] = true;
            
            // Atualiza a sessão..
            $CI->session->set_userdata($config_sessao);

        }
        else
        {

            // Redireciona para o logout o usuário esteja bloqueado..
            logout_session();

        }
      
      }
      else
      {

        // Redireciona para o logout caso não encontrar nenhum usuário..
        logout_session();

      }

  }
  
  
  function logout_session()
  {

      // Destrói a sessão..
      $this->session->sess_destroy();

      // Redireciona para o formulário de login..
      redirect ('painel/entrar');

  }