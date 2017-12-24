$(document).ready(
	//inicializa o html adicionando os envetos js especificados abaixo
	function () {

		Main.load_mask();
		//event for form login
	    $('#bt_login').click(function() { 
			Main.login();
		});
		
		$('#nome').blur(function() { 
			if(this.value != '') Main.show_error("nome", '', 'is-valid');
		});
		
		$('#senha').blur(function() { 
			if(this.value != '') Main.show_error("senha", '', 'is-valid');
		});
		
		$('#confirmar_senha').blur(function() { 
			if(this.value != '') Main.show_error("confirmar_senha", '', 'is-valid');
		});
		
		$('#grupo_id').blur(function() { 
			if(this.value != '0') Main.show_error("grupo_id", '', 'is-valid');
		});
		
		$('#nova_senha').blur(function() { 
			if(this.value != '') Main.show_error("nova_senha", '', 'is-valid');
		});
		
		$('#confirmar_nova_senha').blur(function() { 
			if(this.value != '') Main.show_error("confirmar_nova_senha", '', 'is-valid');
		});
		
		$('#ordem').blur(function() { 
			if(this.value != '') Main.show_error("ordem", '', 'is-valid');
		});
		
		$('#descricao').blur(function() { 
			if(this.value != '') Main.show_error("descricao", '', 'is-valid');
		});
		
		$('#url_modulo').blur(function() { 
			if(this.value != '') Main.show_error("url_modulo", '', 'is-valid');
		});
		
		$('#icone').blur(function() { 
			/*if(this.value != '')*/ Main.show_error("icone", '', 'is-valid');
		});
		
		$('#menu_id').blur(function() { 
			if(this.value != '0') Main.show_error("menu_id", '', 'is-valid');
		});
		
		$('#email').blur(function()
		{
			if(this.value != '')
			{
				if(Main.valida_email(this.value) == false)
					Main.show_error("email", 'Formato de e-mail inválido', 'is-invalid');
				else
					Main.show_error("email", '', 'is-valid');
			}
		});
		
		$('#email').keypress(function() { 
			if ((window.event ? event.keyCode : event.which) == 13){Main.login();}; 
		});
		
		$('#senha').keypress(function() { 
			if ((window.event ? event.keyCode : event.which) == 13){Main.login();}; 
		});
		//BTN CADASTROS
		
		$( "#form_cadastro_usuario").submit(function( event ) {
			event.preventDefault();
			Main.usuario_validar();
		});
		
		$( "#form_cadastro_menu").submit(function( event ) {
			event.preventDefault();
			Main.menu_validar();
		});
		
		$( "#form_cadastro_modulo").submit(function( event ) {
			event.preventDefault();
			Main.modulo_validar();
		});
		
		//FIM BTN CADASTROS

		//event for form register
		 $('#bt_delete').click(function() { 
			Main.delete_registro();
		});
	}
 );