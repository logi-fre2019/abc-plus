<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Site_Controller extends Public_Controller {
    
    function __construct()
    {
       parent::__construct();
   
    }
	


	function index()
	{
        $data['log_msg']= '';
        $vu = $this->input->post("username");
        $pw = $this->input->post("password");
        
        
		if($this->input->post("btnlog")){

              
		      $this->login($vu,$pw,$data);
              
		}else{
             $this->load->view('login',$data) ;
          
		}
        
	}

   
}