<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_projects extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
        
        
    }
    
    function saveNewProject($par){
        $sql_call = "call usp_save_newprojects ('" . $par->prjn ."','" . $par->prjt . "','" . $par->prja . "','" . 
                    $par->prjc . "','" . $par->prjsd . "','" . $par->prjcd . "','" . $par->prjst . "','" . 
                    $this->session->userdata('user_ndx') . "','" . $par->prjx . "');";

        return $this->lib_sp_calls->call_sp_rs($sql_call)->row();              
    }
    
    function showProjects($ndx){
          $sql_call = "call usp_show_projects '(" . $ndx . "');";

        return $this->lib_sp_calls->call_sp_rs($sql_call)->result();         
    }
}