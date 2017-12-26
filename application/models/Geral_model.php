<?php
	class Geral_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_identificador_menu($modulo)
		{
			
			$query = $this->db->query("SELECT menu_id FROM modulo WHERE url = ".$this->db->escape($modulo)."");
			$result = $query->row_array();
				
			return $result['menu_id'];
		}
	}
?>