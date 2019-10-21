<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends Public_Controller {
    
    function __construct()
    {
       parent::__construct();
        $this->load->model('Mdl_projects');
        
       
    }

    function saveNewProject(){
        $inp = (object) $this->input->post();
        
        $rs = $this->Mdl_projects->saveNewProject($inp);
        
        echo $rs->msg_result;
        
        
    }
    
    function showProjects(){
        $rs = $this->Mdl_projects->showProjects($inp);
        
        return $rs;      
    }
    
    function edit_project(){
        $ndx = $this->input->post("ndx");
        $pdata['prj_ndx'] = $ndx;
        $pdata['col'] = 12;
        $pdata['hdr'] = 'Update Project Details';
        $rsprj = $this->Mdl_projects->showProjects($ndx);
        ///print_r($rsprj[0]);
        $pdata['prj'] =  $rsprj[0];
        
        
        echo $this->load->view('projects/view_new_projects',$pdata,true);         
         
        
    }
    
    function doCommand(){
        $cmd = $this->input->post("cmd");
        $html = 'No Data';
        switch($cmd){
            case 'expense':
                $xprj['v'] = '';
                $html = $this->load->view('projects/view_proj_expenses',$xprj,true);   
                break;
            case 'payroll':
                $xprj['v'] = '';
                $html = $this->load->view('projects/view_proj_payroll',$xprj,true);   
                break;  
            case 'manpower':
                $xprj['v'] = '';
                $html = $this->load->view('projects/view_proj_manpower',$xprj,true);   
                break;                 
            default:
                
        }
        
        echo $html;
        
    }
}