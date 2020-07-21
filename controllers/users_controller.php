<?php 

class Users_controller extends CI_Controller
{
	

		public function ulogin(){
	$this->form_validation->set_rules('username', 'Username', 'required');
	$this->form_validation->set_rules('password','Password','required');

	if($this->form_validation->run()){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->load->model('loginmodel');
		$login_id=$this->loginmodel->isvalidate($username,$password);
		if($login_id)
		{
			$this->load->library('session');
			$this->session->set_userdata('id',$login_id);
			return redirect('Users_controller/welcome');

		}
		else{
			echo "invalid user";
		}
	}
	else{
		print "<script type=\"text/javascript\">alert('Field Required');</script>";

		$this->load->view('users/user_page');

	}
}

public function welcome(){

	$this->load->view('users/dashboard');
	
}

public function logout(){
	$this->session->unset_userdata('id');
	return redirect('homepage_controller/index');
}
}
 ?>