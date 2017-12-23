<?php
	class Menu_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_menu()
		{
			$query = $this->db->query("SELECT me.nome AS nome_menu, me.id as id_menu, 
										mo.nome as nome_modulo, mo.id as id_modulo, mo.url as url_modulo, 
										mo.icone 
										FROM menu me 
										RIGHT JOIN modulo mo ON me.Id = mo.menu_id 
										WHERE mo.ativo = 1 OR me.ativo = 1 ORDER BY mo.ordem, me.ordem");
			return $query->result_array();
		}
		
		public function get_grupo_menu()
		{
			$query = $this->db->query("SELECT id, nome FROM menu WHERE ativo = 1");
			return $query->result_array();
		}
	}
?>