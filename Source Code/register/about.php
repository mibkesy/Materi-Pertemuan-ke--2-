<?php
public function view($page = 'register')
{
	if(!file_exists(APPPATH.'views/register/'.$page.'.php'))
	{
		show_404();
	}
	data['title'] = ucfirst($page);
	$this->load->view('templates/header',$data);
	$this->load->view('register/'.$page, $data);
	$this->load->view('templates/footer', $data);
}
?>
