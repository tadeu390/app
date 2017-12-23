<?php
	class Geral extends CI_Controller 
	{
		protected $data;

		public function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
			$this->load->model('Menu_model');
			$this->load->helper('url_helper');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->helper('form');
			$this->load->library('session');
			$this->data['url'] = base_url();
		}

		public function set_menu()
		{
			$this->data['grupo'] = $this->Menu_model->get_grupo_menu();
			$this->data['menu'] = $this->Menu_model->get_menu();
		}
	}
?>