<script type="text/javascript"
        src="<?php echo base_url(); ?>js/personnels/per_newentry.js">
</script>
<br>
<span class="lbl_def">New Personnel Data Entry</span>
<hr>
<div class="row">
    <div class="col-sm-6">
        <table class="table" id="tbl_newpersonnel">
            <tr><td>I.D.</td><td><span class="form-control input-sm"></span></td></tr>
            <tr><td>Last Name</td><td ><input type="text" class="form-control input-sm"></td></tr>
            <tr><td>First Name</td><td ><input type="text" class="form-control input-sm"></td></tr>
            <tr><td>Middle Name</td><td ><input type="text" class="form-control input-sm"></td></tr>
            <tr><td>Date of Birth</td><td ><input type="date" class="form-control input-sm"></td></tr>
            <tr><td>Contact</td><td ><input type="text" class="form-control input-sm"></td></tr>
            <tr><td>Address</td><td ><textarea class="form-control input-sm"></textarea></td></tr>
            <tr><td>Classfication</td><td ><select class="form-control input-sm">
                                        <option>[Select]</option>
                                     </select></td></tr>           
            
        </table>
    </div>
    <div class="col-sm-6">
        <table class="table" id="tbl_newpersonnel">
            <tr><td>Proj Assignment</td><td ><select class="form-control input-sm">
                                        <option>[Select]</option>
                                     </select></td></tr>                     
            <tr><td>Position</td><td ><select class="form-control input-sm">
                                        <option>[Select]</option>
                                     </select></td></tr>
            <tr><td>Daily Rate</td><td ><input type="number" class="form-control input-sm"></td></tr>
            <tr><td>Hours / Day</td><td ><input type="number" class="form-control input-sm"></td></tr>
            <tr><td>Can Overtime</td><td ><select class="form-control input-sm">
                                        <option>[Select]</option>
                                     </select></td></tr>    
            <tr><td>Status</td><td ><select class="form-control input-sm">
                                        <option>[Select]</option>
                                     </select></td></tr>         
            
        </table>
    </div>
</div>