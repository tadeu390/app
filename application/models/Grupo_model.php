<?php
	class Grupo_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_grupo($id = FALSE)
		{
			if ($id === FALSE)
			{
				$query = $this->db->query("SELECT id, nome AS nome_grupo FROM grupo WHERE ativo = 1");
				return $query->result_array();
			}

			$query =  $this->db->query("SELECT id, nome AS nome_grupo FROM grupo WHERE ativo = 1 
										WHERE id = ".$this->db->escape($id)."");
			return $query->row_array();
		}
		
		public function deletar($id)
		{
			return $this->db->query("UPDATE grupo SET ativo = 0 
										WHERE id = ".$this->db->escape($id)."");
		}
	}
?>