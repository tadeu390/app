<?php
	class Usuario_model extends CI_Model {

		public function __construct()
		{
			$this->load->database();
		}
		
		public function get_usuario($id = FALSE)
		{
			if ($id === FALSE)
			{
				$query = $this->db->query("SELECT u.id, u.nome as nome_usuario, u.email, 
											u.ativo, g.nome AS nome_grupo 
												FROM usuario u 
											LEFT JOIN grupo g ON u.grupo_id = g.Id 
											ORDER BY u.data_registro DESC");
				return $query->result_array();
			}

			$query =  $this->db->query("SELECT u.id, u.nome as nome_usuario, u.email, u.senha, u.ativo, 
										DATE_FORMAT(u.data_registro, '%d/%m/%Y') as data_registro, 
										DATE_FORMAT(u.ultimo_acesso, '%d/%m/%Y') as ultimo_acesso, 
										g.nome AS nome_grupo, u.grupo_id  
											FROM usuario u 
										LEFT JOIN grupo g ON u.grupo_id = g.id
										WHERE u.id = ".$this->db->escape($id)."");
			return $query->row_array();
		}
		
		public function deletar($id)
		{
			return $this->db->query("UPDATE usuario SET ativo = 0 
										WHERE id = ".$this->db->escape($id)."");
		}
		
		public function set_usuario($data)
		{
			if(empty($data['id']))
				return $this->db->insert('usuario',$data);
			else
			{
				$this->db->where('id', $data['id']);
				return $this->db->update('usuario', $data);
			}
		}
	}
?>