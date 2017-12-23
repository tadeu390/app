<?php
	require_once("Geral.php");

	class Grupo extends Geral {
		public function __construct()
		{
			parent::__construct();
			
			if(empty($this->login_model->session_is_valid($this->session->id)['id']))
				redirect('login/login');
			
			$this->load->model('Usuario_model');
			$this->set_menu();
			$this->data['controller'] = 'Usuario';
		}
		
		/*
			Renderiza o dashboard
		*/
		public function index()
		{
			$this->data['title'] = 'Administração - dashboard';
			$this->data['usuarios'] = $this->Usuario_model->get_usuario();

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('usuario/index',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function deletar($id)
		{
			$this->Usuario_model->deletar($id);
		}
		
		public function detalhes($id)
		{
			$this->data['title'] = 'Usuario - Detalhes';
			$this->data['obj'] = $this->Usuario_model->get_usuario($id);

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('usuario/detalhes',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function create_edit($id)
		{
			$this->data['title'] = 'Usuario - Cadastro';
			$this->data['obj'] = $this->Usuario_model->get_usuario($id);

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('usuario/create_edit',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
	}
?>