<?php 
 class loginmodel extends CI_model
 {
 	public function isvalidate($username,$password)
 	{
	$data=$this->db->where(['username'=>$username,'password'=>$password])
					->get('user');

		// echo "<pre>";
		// print_r($data);
		
		if($data->num_rows())
		{
			return $data->row()->id;
		}
		else{
			return false;
		}

}
public function displayname($username)
{
	$name=$this->db->where(['username'=>$username])
					->get('user');
					echo "<pre>";
		print_r($name);
	if($name->num_rows())
		{
			return $name->row()->username;
		}
		else{
			return false;
		}
}
 }

 ?>