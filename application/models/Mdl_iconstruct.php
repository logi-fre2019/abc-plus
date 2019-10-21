<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_iconstruct extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
        
        
    }
    
    function user_login($uname,$password){
        
        $sql_call = "call usp_user_log ('" . $uname . "','" . $password ."');";

        return $this->lib_sp_calls->call_sp_rs($sql_call)->row();    
    }
   
    function get_userinfo($ndx){
        $sql_call = "call usp_user_dtls ('" . $ndx ."');";

        return $this->lib_sp_calls->call_sp_rs($sql_call)->row();          
    }
    
    
    
}
    