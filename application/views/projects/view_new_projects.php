<script type="text/javascript"
        src="<?php echo base_url(); ?>js/projects/new_projects.js">
</script>
<div class="row">
    <div class="col-sm-<?php echo $col; ?>">
        <div class="panel panel-success">
            <div class="panel-heading">
                <span class="cust_h3"><span class="glyphicon glyphicon-plus"></span><?php echo $hdr ?></span>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr><td>*Project Name:</td><td><input id="prj_name" type="text" class="form-control input-sm"
                                                    value="<?php echo (isset($prj->prj_name) ? $prj->prj_name : '') ?>"      
                                                          /></td></tr>
                    <tr><td>*Project Type:</td><td><select id="prj_type" class="form-control input-sm" >
                            <option value="">[Select]</option>
                            <option value="Road">Road</option>
                            <option value="House|Building">House|Building</option>
                            <option value="Dikes|River">Dikes|River</option>
                            <option value="Irrigation">Irrigation</option>
                        </select></td></tr>
                    <tr><td>*Project Address:</td><td><input id="prj_addr" type="text" class="form-control input-sm" value="<?php echo (isset($prj->prj_address) ? $prj->prj_address : '') ?>" /></td></tr>
                    <tr><td>*Project Cost:</td><td><input value="<?php echo (isset($prj->prj_cost) ? $prj->prj_cost : '') ?>"  id="prj_cost" type="number" class="form-control input-sm" /></td></tr>
                    <tr><td>Start Date:</td><td><input id="prj_sdate" type="date" class="form-control input-sm" value="<?php echo (isset($prj->prj_sdate) ? $prj->prj_sdate : '') ?>" /></td></tr>
                    <tr><td>Target Completion Date:</td><td><input id="prj_cdate" type="date" class="form-control input-sm" value="<?php echo (isset($prj->prj_comp_date) ? $prj->prj_comp_date : '') ?>" /></td></tr>
                     <tr><td>*Project Status:</td><td><select id="prj_stat" class="form-control input-sm" >
                            <option value="">[Select]</option>
                            <option value="On-going">On-Going</option>
                            <option value="Completed">Completed</option>
                            <option value="Stop|Halted">Stop|Halted</option>
                        </select></td></tr>                   
                </table>
            
            </div>
            <div class="panel-footer">
                <a data-ndx="<?php echo $prj_ndx; ?>" id="btn_saveprj" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save Project</a>
            </div>
        </div>
    
    </div>
    
</div>