<?php
{
	$this->load->library('form_validation');
	$data['title'] = 'create Register User';
	$this->form_validation->set_rules('userName','Username', 'required');
	$this->form_validation->set_rules('first_Name', 'Firstname', 'required');
	$this->form_validation->set_rules('last_Name', 'Lastname', 'required');
	{
		$this->load->view('templates/header', $data);
		$this->load->view('register/create');
		$this->load->view('templates/footer');
	}
	{
		$this->users_model->set_creates_users();
		$this->load->view('register/success');
	}
}
?>
