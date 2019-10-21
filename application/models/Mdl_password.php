<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_password extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
        
        
    }
    
    function getpassword($ndx){
        $sql_call = "call usp_get_user_password ('" . $ndx."');";

        return $this->lib_sp_calls->call_sp_rs($sql_call)->row();           
    }
    
    function save_password($ndx,$npass){

         $sql_call = "call usp_user_save_password ('" . $ndx."','" . $npass . "');";

         $this->lib_sp_calls->call_sp_rs($sql_call);
        
    }
    
}