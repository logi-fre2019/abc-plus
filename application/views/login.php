
<?php
    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0"); 
    $this->output->set_header("Pragma: no-cache");

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Carlo Ofrecio" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
	
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script src="bootstrap/dist/js/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    
    <link href="<?php echo base_url();?>bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/dist/css/jquery-ui.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/media/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/my_style.css"/>
    <link rel ="SHORTCUT ICON" href = "hrweb/brandic.png"> </link>


    <script>
        $(document).ready( function(){

            
        });        
    
    </script>

</head>      
<body>
 <div class="row">    
     
   <nav class="navbar navbar-inverse navbar-fixed-top" >
     <div class="container">
	    <div  class="navbar-header">
		      <a class="navbar-brand" style="font-size:25px;color:peachpuff;margin-top:-12px;" ><img style="width:90px;" src="hrweb/brandic.png"/>        <B> iConstruct 1.00</B>
              </a>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria- expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
		</div>  
    
    	 <div id="navbar" class="navbar-collapse collapse">
         <form method="POST" action=""> 
            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <i style="color:white;"><?php echo  $log_msg ; ?></i>
                    </li>
                    <li>
                      <a> <input name="username" class="form-control input-sm" type="text" placeholder="User ID" /></a>
                    </li>
                    <li>
                        <a><input name="password" class="form-control input-sm" type="password" placeholder="Password"/></a>
                    </li>
                    <li>
                        <a><span class="glyphicon glyphicon-log-out"></span> <input name="btnlog" class="btn btn-warning" type="submit" value="Log-In"/></a>
                    </li>
             </ul>
         </form>    
	     </div>
      </div>
   </nav> <!-- end navbar --> 
     
     
 </div>
 <div class="row" style="margin-top:100px;">
    <div class="col-sm-3"></div> 
    <div class="col-sm-6" align="center">
        <p><img style="width:150px;" src="hrweb/brandic.png" /></p>
        <p class="text-justify"><strong>iConstruct</strong> - a web application used for monitoring constructions project expenses, including purchase of materials, manpower consumption(personnel management and payroll), financial positions and other related features. </p>               
       
     </div>
     <div class="col-sm-3">
     </div>
 </div>    

 <div class="row">
   <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container-fluid">
        <a style="color:orange;">**Copyright (c) R.G. 2017**</a>
        </div>
 
      </div>
   </nav>
 </div>  
</body>


</html>

