<?php
	class Menu_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_menu()//usado apenas para listar os menus
		{
			$query = $this->db->query("SELECT id, nome, ordem, ativo FROM menu WHERE ativo = 1");
			return $query->result_array();
		}
		
		public function get_menu_tela($id = false)
		{
			if($id === false)
			{
				$query = $this->db->query("SELECT id, nome, ordem, ativo FROM menu");
				return $query->result_array();
			}
			
			$query = $this->db->query("SELECT id, nome, ordem, ativo FROM menu 
										WHERE id = ".$this->db->escape($id)."");
				return $query->row_array();
		}
		
		public function deletar($id)
		{
			return $this->db->query("UPDATE menu SET ativo = 0 
										WHERE id = ".$this->db->escape($id)."");
		}
		
		public function set_menu($data)
		{
			if(empty($data['id']))
				return $this->db->insert('menu',$data);
			else
			{
				$this->db->where('id', $data['id']);
				return $this->db->update('menu', $data);
			}
		}
	}
?>