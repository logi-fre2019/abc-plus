<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personnels extends Public_Controller {
    
    function __construct()
    {
       parent::__construct();
        $this->load->model('Mdl_personnels');
        
       
    }

}