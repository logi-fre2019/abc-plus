<script type="text/javascript"
        src="<?php echo base_url(); ?>js/personnels/per_settings.js">
</script>
<br>
<span class="lbl_def">Personnel Settings</span>
<hr>
<div class="row">
    <div class="col-sm-7">
        <table class="table" id="tbl_perlist">
            <thead>
                <tr><th>Status</th><th>I.D.</th><th>Name</th><th>Contact</th><th>Address</th></tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <div class="col-sm-5">
        <table class="table">
            <tr>
                <td>Project Assignment</td>
                <td><select class="form-control input-sm">
                        <option>[Select]</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Rate Per Day</td>
                <td><input type="number" class="form-control input-sm"></td>
            </tr>
            <tr>
                <td>Hours Per Day</td>
                <td><input type="number" class="form-control input-sm"></td>
            </tr>
            <tr>
                <td>Position</td>
                <td><select class="form-control input-sm">
                        <option>[Select]</option>
                    </select>
                </td>
            </tr>  
            <tr>
                <td>Classfication</td>
                <td><select class="form-control input-sm">
                        <option>[Select]</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td>Overtime?</td>
                <td><select class="form-control input-sm">
                        <option>[Select]</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td colspan="2">
                    <button class="btn"><span class="glyphicon glyphicon-save"></span> Update Details</button>
                </td>
            </tr>
        </table>
    </div>
</div>