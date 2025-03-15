<?php
class Users_model extends CI_Model {
	public function_construct()
	{
		$this->load->database();
	}
	public function get_users() {
		$query = $this->db->get('Users_table');
		return $query->result_array();
	}
}
?>
