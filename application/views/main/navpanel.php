
    <nav class="navbar navbar-inverse navbar-fixed-top">
	
	 <div class="container-fluid">
        <div  class="navbar-header">
	
		 <a class="navbar-brand" style="font-size:22px;color:peachpuff;margin-top:-12px;" ><img style="width:80px;" src="<?php echo base_url() ?>hrweb/brandic.png"/><B> iConstruct 1.00</B>
              </a>
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria- expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
            
            
		</div>         
	 
            
	
		<div id="navbar" class ="navbar-collapse collapse">
			<div class="navbar-form navbar-right" style="cursor:pointer">
				<ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url().'C_SidePanel/change_password/'.$empid; ?>"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
                    <li><a href="<?php echo base_url();?>C_SidePanel/logout"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>                   
				</ul>
		    </div>
		</div>	
        </div>
	</nav> <!-- end navbar -->