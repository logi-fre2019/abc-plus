<script>
	$(document).ready(function(){
		
		$('#btn_update').on('click', function(){
			var opass = $('#opass').val();
			var npass= $('#npass').val();
			var cpass= $('#cpass').val();
			var empid = $('#s_users').attr('name');
			$.ajax({
				type:"POST",
				url:'<?php echo base_url();?>Password/change_password',
				data:{
					opass:opass,
					npass:npass,
					cpass:cpass,
					empid:empid
				}
				
			}).done( function(msg){
				$('#msg_result').html(msg);
			});
		});
		
		
	});

</script>
<div class="row">
	<div class="col-sm-6">
		<span> Change Password:</span>
		<hr>
		<table class="table table-condensed">
			<tr><td>Old Password:</td><td><input  id="opass" type="password" class="form-control input-sm" /></tD></tr>
			<tr><td>New Password:</td><td><input  id="npass" type="password" class="form-control input-sm" /></tD></tr>
			<tr><td>Confirm New Password:</td><td><input id="cpass" type="password" class="form-control input-sm" /></tD></tr>
			<tr><td></td><td></tD></tR>
			
			<tr><td><button id="btn_update" class="btn"><span class="glyphicon glyphicon-save"></span> Update Password</button></td><td></tD></tR>
			<tr><td style="color:red;" colspan="2" id="msg_result" ></td></tr>
		</table>
	</div>
</div>