$(document).ready(
	//inicializa o html adicionando os envetos js especificados abaixo
	function () {

		Main.load_mask();
		//event for form login
	    $('#bt_login').click(function() { 
			Main.login();
		});
		
		$('#email').blur(function() { 
			if(this.value != '') Main.valida_email(this.value);
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
		
		//FIM BTN CADASTROS

		$('#Nome').blur(function() { 
			if(this.value != '') Main.show_error("Nome","error-nome","","form-control is-valid");
		});
		
		$('#CategoriaId').blur(function() { 
			if(this.value != '') Main.show_error("CategoriaId","error-CategoriaId","","form-control is-valid");
		});
		//event for form register
		
		$('#Matricula').blur(function() { 
			if(this.value != '') Main.show_error("Matricula","error-matricula","","form-control is-valid");
		});
		
		$('#NumeroChamada').blur(function() { 
			if(this.value != '') Main.show_error("NumeroChamada","error-numero_chamada","","form-control is-valid");
		});
		
		$('#DataNascimento').blur(function() { 
			if(this.value != '') Main.show_error("DataNascimento","error-data_nascimento","","form-control is-valid");
		});
		
		$('#CursoId').blur(function() { 
			if(this.value != '0') Main.show_error("CursoId","error-curso_id","","form-control is-valid");
		});
		//event for form register
		 $('#bt_delete').click(function() { 
			Main.delete_registro();
		});
		
		$('#bt_disciplina_turma').click(function() { 
			Main.disciplina_turma_validar();
		});
		
		$('#bt_aluno_turma').click(function() { 
			Main.aluno_turma_validar();
		});
		
		$('#bt_trocar_aluno').click(function() {
			$("#admin_trocar_aluno").modal('show');
		});
		$('#bt_trocar_aluno_continuar').click(function() {
			Main.validar_turma_origem();
		});
		$('#TurmaId').click(function() {
			if(this.value != '0') Main.show_error("TurmaId","error-turma","","form-control is-valid");
		});
	}
 );