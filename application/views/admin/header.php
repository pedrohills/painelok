<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Entrar no painel</title>
    <!--Import materialize.css-->
    <link href="<?php echo base_url('assets/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet" media="screen,projection">

	<!-- Custom Css-->
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" type="text/css" rel="stylesheet">

    <!-- Let browser know website is optimized for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  </head>

  <body>

	<!-- Page Layout here -->
    <div class="row">
    	<!-- Sidebar -->
    	<header>
			<div class="col s12 m4 l3 no-padding">
	      		<div class="col s12 no-padding">
	          		<div class="card blue-grey darken-4 no-margin">
	            		<div class="card-content white-text">
	              			<span class="card-title">
	          					<span class="right drop-account" data-activates="drop-account">
	          						<i class="mdi-navigation-more-vert"></i>
	      						</span>
	          					<span class="right cursor hide-on-med-and-up" id="toggle-menu">
	          						&nbsp;&nbsp;
	          						<i class="mdi-navigation-menu"></i>
	          						&nbsp;&nbsp;
	      						</span>
	              				Olá, Pedro Henrique Araújo de Brito!
	          					<!-- Dropdown Account -->
						  		<ul id='drop-account' class='dropdown-content'>
							    	<li><a href="#!" class="blue-grey-text text-darken-3">Editar Perfil</a></li>
							    	<li><a href="#!" class="blue-grey-text text-darken-3">Alterar Senha</a></li>
							    	<li class="divider"></li>
							    	<li><a href="<?php echo base_url('painel/sair'); ?>" class="blue-grey-text text-darken-3">Desconectar</a></li>
							  	</ul>
	              			</span>
	          				<p>
	          					djpedrohills@hotmail.com

						  	</p>
	            		</div>
	          		</div>
	          		<div class="card no-margin" id="ok-menu">
	      				<ul class="collapsible no-margin" data-collapsible="accordion">
						    <li>
						      	<div class="collapsible-header"><i class="mdi-social-person"></i> Usuários</div>
						      	<div class="collapsible-body blue-grey lighten-5">
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-account-child"></i>
					      				Todos os usuários
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-social-person-add"></i>
					      				Adicionar usuário
					      			</a>
						      	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-av-new-releases"></i> Posts</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-av-my-library-books"></i>
					      				Todos os posts
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-note-add"></i>
					      				Adicionar novo
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-communication-forum"></i>
					      				Comentários
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-book"></i>
					      				Categorias
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-maps-local-offer"></i>
					      				Tags
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-image-camera-front"></i> Slider</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-open-with"></i>
					      				Organizar
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-image-add-to-photos"></i>
					      				Adicionar imagens
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-image-photo-camera"></i> Fotos</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-image-photo-library"></i>
					      				Todos os albúns
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-image-add-to-photos"></i>
					      				Adicionar albúm
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-av-videocam"></i> Vídeos</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-av-video-collection"></i>
					      				Todas as galerias
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-image-add-to-photos"></i>
					      				Adicionar galeria
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-action-wallet-travel"></i> Portfólio</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-picture-in-picture"></i>
					      				Meu portfólio
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-av-playlist-add"></i>
					      				Adicionar item
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-notification-event-note"></i> Agenda</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-search"></i>
					      				Visualizar
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-notification-event-available"></i>
					      				Adicionar evento
					      			</a>
					     	 	</div>
						    </li>
						    <li>
						      	<div class="collapsible-header"><i class="mdi-maps-rate-review"></i> Depoimentos</div>
					     	 	<div class="collapsible-body blue-grey lighten-5">
									<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-action-search"></i>
					      				Ver todos
					      			</a>
					      			<a class='dropdown-menu-button blue-grey-text text-darken-4' href='#' data-activates='dropdown1'>
					      				<i class="tiny mdi-communication-textsms"></i>
					      				Adicionar novo
					      			</a>
					     	 	</div>
						    </li>
					  	</ul>
	          		</div>
	        	</div>
			</div>
		</header>
		<!-- Fim sidebar -->
		<!-- Conteúdo -->
		<main>
			<div class="col s12 m8 l9 no-padding">
				<div class="col s12 no-padding">
					<div class="card-panel no-margin">
						<h2>Início</h2>
					</div>
				</div>	
	      	</div>
		</main>
		<!-- Fim conteúdo -->
    </div>
    <!-- Rodapé -->
    <footer class="page-footer blue-grey darken-3">
      	<div class="container">
            <div class="row">
              	<div class="col l3 m6 s12">
                	<h5 class="white-text">Conteúdo do rodapé</h5>
                	<p class="grey-text text-lighten-4">Vamos escrever algo aqui depois...</p>
              	</div>
              	<div class="col l3 m6 s12">
           			<h5 class="white-text">Links</h5>
                	<ul>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  		<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                	</ul>
              	</div>
              	<div class="col l3 m6 s12">
                	<h5 class="white-text">Facebook</h5>
              	</div>
              	<div class="col l3 m6 s12">
           			<h5 class="white-text">Twitter</h5>
              	</div>

            </div>
      	</div>
      	<div class="footer-copyright blue-grey darken-4">
    		<div class="container blue-grey-text text-lighten-5">
            	 Copyright © <?php echo date('Y'); ?> - PainelOk - Todos os direitos reservados
            	<a class="right blue-grey-text text-lighten-5" href="http://agenciaokdesign.com">Desenvolvido por <strong>Agência OkDesign</strong></a>
        	</div>
      	</div>
    </footer>
    <!-- Fim rodapé -->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>

	<script type="text/javascript">
	    $(document).ready(function(){
		    $(".drop-account").dropdown({
				inDuration: 300,
				outDuration: 225,
				constrain_width: false, // Does not change width of dropdown to that of the activator
				hover: true, // Activate on click
				alignment: 'right', // Aligns dropdown to left or right edge (works with constrain_width)
				gutter: 0, // Spacing from edge
				belowOrigin: false // Displays dropdown below the button
			});

			$("#toggle-menu").click(function() {
			  	$("#ok-menu").slideToggle("fast");
			});
		     
	    });
	</script>
  </body>
</html>