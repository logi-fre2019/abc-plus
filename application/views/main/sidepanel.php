    <?php $nrow = $emp_rs;

      //  print($nrow);
    
?>

  <div id="empinfo" class="row hdrbnr" >
    <div class="col-sm-1"  align="center">
            <img  style="width:75px; height:75px;" src="<?php echo base_url() . 
                    'hrweb/emp_images/' . ($this->session->userdata("emp_img") == '' ? 'def_img.jpg' : $this->session->userdata("emp_img") ) ; ?> "/>       
    </div>
    <div class="col-sm-4"  align="center">
         <table style="padding: 0;">
             <tr><td style="font-size:30px;"><b><?php echo $nrow->user_fullname;?></b></td></tr>
             <tr><td><?php echo $nrow->user_name; ?></td></tr>
             <tr><td><?php echo $nrow->user_position; ?></td></tr>
          </table> 
      
    </div>
    <div class="col-sm-7">
    </div>
    <div class="rowsep" style="margin-top:75px;"></div> 
  </div>
   
  <div class="row">
        
        <div class="col-sm-3">
                 <div id="dashboard" >
                    	<div id="cmd_center" class="panel panel-success" >
                  
                				<div class="panel-heading"><h3 class="panel-title">Dashboard</h3></div>
                				<div class="panel-body">
                                       <?php $actsel= $this->data['actsel']; $accrd = $this->data['accrd']; ?>
                                      <b data-toggle="collapse" data-parent="#cmd_center" style="color:sienna; cursor:pointer" href="#prjsec">
                                        <span class="glyphicon glyphicon-book" style="font-size:2.5em;"></span> Project Maintenance</b> <hr />
                                        <div id="prjsec" class="panel-collapse collapse <?php echo ($accrd == '1' ? 'in' : '');?>">
                                             <ul class="nav nav-pills nav-stacked">
                                                  <li <?php echo ("newprj" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                        <a href="<?php echo base_url() .'C_SidePanel/optSel/newprj/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> New Project</a></li>                                   
                                                  <li <?php echo ("updprj" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                        <a href="<?php echo base_url() .'C_SidePanel/optSel/updprj/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> Project Updates</a></li>

                                             </ul>       
                                            <hr/>
                                      </div>                                                                                                                                  

                                      <b data-toggle="collapse" data-parent="#cmd_center"  style="color:sienna; cursor:pointer" href="#persec">
                                        <span class="glyphicon glyphicon-user" style="font-size:2.5em;"></span> Personnels</b>  <hr />
                                       <div id="persec" class="panel-collapse collapse <?php echo ($accrd == '2' ? 'in' : '');?>"> 

                                             <ul class="nav nav-pills nav-stacked">
                                       
                                                  <li <?php echo ("cmanpwr" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                        <a href="<?php echo base_url() .'C_SidePanel/optSel/cmanpwr/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> Current Manpower List</a></li>                                   
                                                  <li <?php echo ("perset" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                        <a href="<?php echo base_url() .'C_SidePanel/optSel/perset/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> Personnel Settings</a></li>
                                                  <li <?php echo ("pernew" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                        <a href="<?php echo base_url() .'C_SidePanel/optSel/pernew/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> New Personnel</a></li>
                                                 

                                             </ul>   
                                            <hr/>
                                       </div>       
                                      <b  data-toggle="collapse" data-parent="#cmd_center"  style="color:sienna; cursor:pointer" href="#tkeepsec">
                                        <span class="glyphicon glyphicon-calendar" style="font-size:2.5em;"></span>Accounts & Payroll Parameters</b> <hr />    
                                        <div id="tkeepsec" class="panel-collapse collapse <?php echo ($accrd == '3' ? 'in' : '');?>">  

                                          <ul class="nav nav-pills nav-stacked">
                                              <li <?php echo ("chart_acnt" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                    <a href="<?php echo base_url() .'C_SidePanel/optSel/chart_acnt/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> Chart of Accounts</a></li>
                                              <li <?php echo ("wrk_scheds" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                    <a href="<?php echo base_url() .'C_SidePanel/optSel/wrk_scheds/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> Work Schedules</a></li>
                                              <li <?php echo ("emp_dtr" == $actsel ? 'class="active"' : ''); ?> role="presentation">
                                                    <a href="<?php echo base_url() .'C_SidePanel/optSel/emp_dtr/'. $nrow->user_id;?>"><span class="glyphicon glyphicon-chevron-right"> </span> DTR Entries</a></li>
                                              <hr/>
                                              
                                          </ul>    
                                        </div>
                                        
                                </div>
                                <div class="panel-footer">
                                    
                                </div>
                    
                      	</div>
                 </div>
         </div>
  
