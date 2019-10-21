
<?php
  
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
  
    if (!$this->session->userdata('uname')){
          windows.redirect (base_url());
    }

    
?>


<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Carlo Ofrecio" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.11.1.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>bootstrap/dist/js/jquery.min.js"></script> 

    
    
    
    <link href="<?php echo base_url();?>bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/dist/css/jquery-ui.css" rel="stylesheet">

    
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/media/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/dtbl_buttons/buttons.dataTables.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/my_style.css"/>
    
    
    
    
    <link rel ="SHORTCUT ICON" href = "../../../hrweb/brandic.png"> </link>

	<title>iConstruct v 1.00</title>	
    
    <style>
        #empinfo {
            position:relative;
            top:80px;
            
        }
    
        #dashboard,#mess_area{
            position:relative;
            top:80px;
            
            
        }
    </style>
    
    <script>
        
        myApps = {};
        
        myApps.setLoading = function(obj){
                $('#'+obj).html('<img style="width:40px;" src="'+myApps.base_url()+'application/pimg/loading.gif" />');
        }
    
        
        myApps.base_url= function(){
             return '<?php echo base_url(); ?>';
        }
        
        function base_url(){
            return '<?php echo base_url(); ?>';
        }
        
         myApps.getCurrentDate = function (date){

          const dateAndTime = date.toISOString().split('T')
          const time = dateAndTime[1].split(':')

          return dateAndTime[0];
        }
       
        
    </script>

</head>
<body>