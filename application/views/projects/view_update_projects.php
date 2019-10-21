<script type="text/javascript"
        src="<?php echo base_url(); ?>js/projects/upd_projects.js">
</script>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                Project List
            </div>
            <div class="panel-body">
                <table class="table tbl_def" id="prj_list">
                    <thead>
                        <tr><th>Name</th><th>Address</th><th>Status</th><th>Comp-Date</th></tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($rs_prj[0]->prj_ndx)){
                                foreach($rs_prj as $rw){
                                    echo '<tr data-ndx="'.$rw->prj_ndx.'"><td><a class="btn"><i class="fa fa-pencil fa-sm"></i></a> ' . $rw->prj_name . '</td>' . 
                                            '<td>' . $rw->prj_address . '</td>' . 
                                            '<td>' . $rw->prj_status . '</td>' . 
                                            '<td>' . $rw->prj_comp_date . '</td></tr>';
                                }
                            }
                        
                        ?>
                    </tbody>
                </table>           
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12">
                <span class="lbl_def">Project Details</span>
                <table class="table">
                    <tr><td>Project Name:</td><td class="form-control" style="width:400px;"></td></tr>
                    <tr><td>Project Cost:</td><td class="form-control"></td></tr>
                    <tr><td>Over-all Expenses:</td><td class="form-control"></td></tr>
                    <tr><td>Payroll Summaries:</td><td class="form-control"></td></tr>
                    <tr><td>Current Manpower:</td><td class="form-control"></td></tr>
                </table>
                <table data-ndx="0" id="btn_cmdupd" class="table" align="center">
                    <tr>
                        <td><button cmd-tag="expense"><img class="proj_img" src="<?php echo base_url().'hrweb/expenses.png'; ?>" /><br>Expenses</button></td>
                        <td><button cmd-tag="payroll"><img class="proj_img" src="<?php echo base_url().'hrweb/payroll.png'; ?>"/><br>Payroll</button></td>
                        <td><button cmd-tag="manpower"><img class="proj_img" src="<?php echo base_url().'hrweb/manpower.png'; ?>"/><br>Manpower</button></td>
                    </tr>
                </table>           
            </div>
        </div>
        <div class="row" id="upd_dtls">
        
        </div>

        
    </div>
</div>