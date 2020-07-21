<?php 

/**
 * 
 */
class Homepage_controller extends CI_Controller
{
	
	public function index(){
		$this->load->view('users/user_page');
	}
}
 ?>