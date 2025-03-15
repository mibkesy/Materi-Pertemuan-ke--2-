<?php
public function index($page = 'register')
{
	$data['title'] = ucfirst($page);
	$data['User_table'] = $this->users_model->get_users();
	$this->load->view('templates/header', $data);
	$this->load->view('register/index', $data);
	$this->load->view('templates/footer');
}
?>
