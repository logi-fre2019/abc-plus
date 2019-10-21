<script type="text/javascript"
        src="<?php echo base_url(); ?>js/projects/upd_prj_payroll.js">
</script>
<br>
<div class="container-fluid">
<span class="lbl_def"> Project Payouts</span>

<table class="table" style="font-size:12px;">
    <tr><td style="width:80px;">Batch No:</td><td style="width:120px;"><select class="form-control">
            <option>[Select]<option>
        </select></td><td style="width:80px;">Pay Period</td><td class="form-control"  style="width:120px;" ></td>
        <td style="width:80px;">Status:</td><td class="form-control"  style="width:120px;" ></td>
    </tr>
    <tr><td>Date From:</td><td  class="form-control"></td><td>Date To:</td><td class="form-control"  style="width:120px;" ></td>
        <td style="width:80px;">Command</td><td class="form-control"  style="width:120px;" ></td>
    </tr>
</table>
<div class="col-sm-12">
    <table class="table" id="tbl_payouts">
        <thead>
            <tr><th>I.D.</th><th>Name</th><th>Net Pay</th><th>Position</th></tr>
        </thead>
        <tbody>

        </tbody>
        <tfooter>
            
        </tfooter>
    </table>
</div>
<button class="btn"><span class="glyphicon glyphicon-plus"></span> New Payout Batch</button>
</div>
         