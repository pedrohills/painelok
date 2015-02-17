<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Entrar no painel</title>
    <!--Import materialize.css-->
    <link href="<?php echo base_url('assets/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  </head>

  <body>
    <div class="container">
        <?php
          if ($this->session->flashdata('dados')):
            $mensagem = $this->session->flashdata('dados');

            $usuario = $mensagem["form"]["usuario"];
        ?>
        <div class="row">
            <div class="col s6 offset-s3">
                <div class="<?php echo $mensagem['class']; ?>">
                    <?php echo $mensagem['mensagem']; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col s12 m6 offset-s0 offset-m3">
                <?php echo form_open('painel/entrar'); ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-social-person prefix"></i>
                            <input id="icon_prefix" type="text" name="usuario" id="usuario" class="validate" required value="<?php if (isset($usuario)){ echo $usuario; } ?>">
                            <label for="usuario">Nome de usuário:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input id="icon_prefix" type="password" name="senha" id="senha" class="validate" required>
                            <label for="senha">Senha:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="valign-wrapper">
                          <button class="btn waves-effect waves-light blue-grey darken-4 valign" type="submit" name="entrar" value="entrar">
                              Login
                              <i class="mdi-action-done-all right"></i>
                          </button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>   
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
  </body>
</html>