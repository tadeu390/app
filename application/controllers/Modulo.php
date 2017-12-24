<?php
	require_once("Geral.php");

	class Modulo extends Geral {
		public function __construct()
		{
			parent::__construct();
			if(empty($this->login_model->session_is_valid($this->session->id)['id']))
				redirect('login/login');
			$this->set_menu();
			$this->data['controller'] = 'Modulo';
		}
		
		/*
			Renderiza o dashboard
		*/
		public function index()
		{
			$this->data['title'] = 'Administração - Módulos';
			$this->data['lista_modulos'] = $this->Modulo_model->get_modulo_tela();
			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('modulo/index',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function deletar($id)
		{
			$this->Modulo_model->deletar($id);
		}
		
		public function create_edit($id)
		{
			$this->data['title'] = 'Módulo - Cadastro';
			
			$this->data['obj'] = $this->Modulo_model->get_modulo_tela($id);
			$this->data['lista_menus'] = $this->Menu_model->get_menu_tela();
			
			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('modulo/create_edit',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
		
		public function store()
		{
			$resultado = "sucesso";
			$dataToSave = array(
				'id' => $this->input->post('id'),
				'nome' => $this->input->post('nome'),
				'descricao' => $this->input->post('descricao'),
				'url' => $this->input->post('url_modulo'),
				'ordem' => $this->input->post('ordem'),
				'icone' => $this->input->post('icone'),
				'menu_id' => $this->input->post('menu_id'),
				'ativo' => $this->input->post('modulo_ativo')
			);
			//bloquear acesso direto ao metodo store
			 if(!empty($dataToSave['nome']))
					$this->Modulo_model->set_modulo($dataToSave);
			 else
				redirect('admin/dashboard');
			
			$arr = array('response' => $resultado);
			header('Content-Type: application/json');
			echo json_encode($arr);
		}
		
		public function detalhes($id)
		{
			$this->data['title'] = 'Módulo - Detalhes';
			$this->data['obj'] = $this->Modulo_model->get_modulo_tela($id);

			$this->load->view('templates/header_admin',$this->data);
			$this->load->view('modulo/detalhes',$this->data);
			$this->load->view('templates/footer',$this->data);
		}
	}
?>