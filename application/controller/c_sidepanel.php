<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_SidePanel extends Public_Controller {
    
 
     function __construct(){
        parent::__construct();
        $this->load->model('Mdl_projects');        
    }

    function index(){
        $this::optSel();
        
    }
    
    function optSel(){
        $opt = $this->uri->segment(3);
        $id  = $this->session->userdata('empid');//$this->uri->segment(4);
        $ndx = $this->session->userdata('user_ndx');
        $data['empid'] = $id;
        $this->data['actsel'] = $opt;
        $this->data['accrd'] = '0';
        $data['uinfo'] = $this->session->userdata('uname');
        $aview['tview'] = $this->load->view('main/view_defview',$data,true);
        $aview['hdr'] = ' iConstruct';
        
        $empinfo = $this->Mdl_iconstruct->get_userinfo($id);
       
        $empd['emp_rs'] = $empinfo;
        
        
        if($opt=="newprj"){
               $aview['tview']= $this->addnewproject();
               $aview['hdr'] = "Add new project details";    
               $this->data['accrd'] = '1';
        
        }elseif($opt=="updprj"){
               $aview['tview']= $this::updateproject();
               $aview['hdr'] = "Update project details";    
               $this->data['accrd'] = '1';
        
        }elseif($opt=="cmanpwr"){
               $aview['tview']= $this::curmanpower();
               $aview['hdr'] = "Current Manpower Listing";    
               $this->data['accrd'] = '2';           
        }elseif($opt=="perset"){
               $aview['tview']= $this::personnelsettings();
               $aview['hdr'] = "Personnel Settings";    
               $this->data['accrd'] = '2';             
        }elseif($opt=="pernew"){
               $aview['tview']= $this::personnelnew();
               $aview['hdr'] = "New Personnel Definition";    
               $this->data['accrd'] = '2';             
        }
    
        $this->load->view('main/header');
        $this->load->view('main/navpanel',$data);
        $this->load->view('main/sidepanel',$empd);
        $this->load->view('main/workarea',$aview);
        $this->load->view('main/footer');      
        
    }
	  
    function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('uname');
        redirect(base_url());
        
    }
    
    
    // project module ------------------------------------------------
    
    function addnewproject(){
       $pdata['prj_ndx'] = '0';
       $pdata['col'] = 6;
       $pdata['hdr'] = 'Update Project Details';
       return $this->load->view('projects/view_new_projects',$pdata,true);  
        
        
    }


    
    function updateproject(){
        
       $pdata['p'] = '';
       $pdata['rs_prj'] = $this->Mdl_projects->showProjects('0');
        
       return $this->load->view('projects/view_update_projects',$pdata,true);  
        
    }
    
    function curmanpower(){
       $pdata['p'] = '';
      // $pdata['rs_mnpwr'] = $this->Mdl_personnels->showManPower();
        
       return $this->load->view('personnels/view_current_manpower',$pdata,true);          
    }
    
    function personnelsettings(){
       $pdata['p'] = '';
      // $pdata['rs_mnpwr'] = $this->Mdl_personnels->showManPower();
        
       return $this->load->view('personnels/view_personnel_settings',$pdata,true);     
    }
    
    function personnelnew(){
        $pdata['p'] = '';
      // $pdata['rs_mnpwr'] = $this->Mdl_personnels->showManPower();
        
       return $this->load->view('personnels/view_new_personnel',$pdata,true);        
        
    }
    
 	function change_password(){
	    $opt = $this->uri->segment(2);
        $id  =$this->session->userdata('user_ndx');
        $data['empid'] = $id;
        $this->data['actsel'] = $opt;
        $this->data['accrd'] = '0';
        $data['uinfo'] = $this->session->userdata('uname');
        $aview['tview'] ='';
        $aview['hdr'] = '';	
		
	    $empinfo = $this->Mdl_iconstruct->get_userinfo($id);
        $empd['emp_rs'] = $empinfo;	
		
        $aview['hdr'] = "Change Password Module";
        $uid = $this->session->userdata('uname');
		$aview['tview'] = $this->load->view('main/change_password',$data,true);
		
		
        $this->load->view('main/header');
        $this->load->view('main/navpanel',$data);
        $this->load->view('main/sidepanel',$empd);
        $this->load->view('main/workarea',$aview);
        $this->load->view('main/footer');      
        		
	}	  


}