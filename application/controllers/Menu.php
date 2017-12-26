<?php
	require_once("Geral.php");

	class Menu extends Geral {
		public function __construct()
		{
			parent::__construct();
			if(empty($this->login_model->session_is_valid($this->session->id)['id']))
				redirect('login/login');
			$this->set_menu();
			$this->data['controller'] = get_class($this);
			$this->data['menu_selectd'] = $this->Geral_model->get_identificador_menu(strtolower(get_class($this)));
		}
		
		/*
			Renderiza o dashboard
		*/
		public function index()
		{
			$this->data['title'] = 'Administração - Menus';
			$this->data['lista_menus'] = $this->Menu_model->get_menu_tela();

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('menu/index',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function deletar($id)
		{
			$this->Menu_model->deletar($id);
		}
		
		public function create_edit($id)
		{
			$this->data['title'] = 'Menu - Cadastro';
			
			$this->data['obj'] = $this->Menu_model->get_menu_tela($id);

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('menu/create_edit',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function store()
		{
			$resultado = "sucesso";
			$dataToSave = array(
				'id' => $this->input->post('id'),
				'nome' => $this->input->post('nome'),
				'ordem' => $this->input->post('ordem'),
				'ativo' => $this->input->post('menu_ativo')
			);

			//bloquear acesso direto ao metodo store
			 if(!empty($dataToSave['nome']))
					$this->Menu_model->set_menu($dataToSave);
			 else
				redirect('admin/dashboard');
			
			$arr = array('response' => $resultado);
			header('Content-Type: application/json');
			echo json_encode($arr);
		}
	}
?>