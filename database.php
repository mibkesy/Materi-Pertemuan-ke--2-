<?php
class Users_model extends CI_Model {
	public function_construct()
	{
		$this->load->database();
	}
	public function get_users() {
		$query = $this->db->get('user_table');
		return $query->result_array();
	}
	public function set_creates_users() {
		//$this->load->helper('url');
			$data = array(
			  'user_name' => $this->input->post(userName)
			  'first_name' => $this->input->post('first_Name')
			  'last_name' => $this->input->post('last_Name')
			);
			return $this->db->insert('user_table', $data);
	}
}
?>
