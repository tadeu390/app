<?php
	require_once("Geral.php");

	class Admin extends Geral {
		public function __construct()
		{
			parent::__construct();
			if(empty($this->login_model->session_is_valid($this->session->id)['id']))
				redirect('login/login');
		}
		
		/*
			Renderiza o dashboard
		*/
		public function dashboard()
		{
			$data['url'] = base_url();
			$data['title'] = 'Administração - dashboard';
			$data['grupo'] = $this->Menu_model->get_grupo_menu();
			$data['menu'] = $this->Menu_model->get_menu();
			$this->load->view('templates/header_admin',$data);
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates/footer',$data);
		}
	}
?>