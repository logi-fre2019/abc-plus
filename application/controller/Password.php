<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Password extends Public_Controller {
    
    function __construct()
    {
       parent::__construct();
        $this->load->model('Mdl_password');
        
       
    }

	
	function change_password(){
		$opass=$this->input->post("opass");
		$npass=$this->input->post("npass");
		$cpass=$this->input->post("cpass");
		$empid=$this->session->userdata('user_ndx');
        
	//	echo $npass .'<br>' . $cpass;
		
		if ($npass!=$cpass){
			echo 'Password Mismatch';
			return;
		};
		

		$rs = $this->Mdl_password->getpassword($empid);
		
		//echo print_r($rs);
		$oldp = $rs->user_password;
		if ($opass!=$oldp){
			echo 'Old password do not match';
			return;
		};
		
		$this->Mdl_password->save_password($empid,$npass);
		echo 'Password has been changed';
		
		
		
	}
}
