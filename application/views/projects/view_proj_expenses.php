<script type="text/javascript"
        src="<?php echo base_url(); ?>js/projects/upd_prj_expenses.js">
</script>
<br>
<div class="container-fluid">

<span class="lbl_def">Project Expenses</span>
<hr>
<div class="col-sm-12">
    <table class="table" id="tbl_expenses">
        <thead>
            <tr><th>Date</th><th>Particulars</th><th>Amount</th><th>A_CODE</th></tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    Add New Expense
                </td>
            </tr>
            <tr>
                <td>
                    <input type="date" class="form-control input-sm" />
                </td>
                <td>
                    <textarea class="form-control input-sm"></textarea>
                </td>
                <td>
                    <input class="form-control input-sm" type="number">
                </td>
                <td>
                    <select class="form-control input-sm">
                        <option>[Select]</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                   <button class="btn"><span class="glyphicon glyphicon-plus"></span> Save Details</button>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<br>

</div>        

