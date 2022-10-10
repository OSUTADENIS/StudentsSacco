<?php include 'db_connect.php' ?>
<?php 

if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM borrowers where id=".$_GET['id']);
	foreach($qry->fetch_array() as $k => $val){
		$$k = $val;
	}
}

?> 
<!-- enctype="multipart/form-data" -->
<div class="container-fluid" >
	<div class="col-lg-12">
		<form id="manage-borrower" > 
			<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
			<div class="row">
			<div class="col-md-4">
				<div class="form-group">
						<label for="" class="control-label">Avatar</label>
						<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="avatar" onchange="displayImg(this,$(this))">
						<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>
				</div>
			<div class="col-md-4">
				<div class="form-group">
				<img src="<?php echo isset($meta['avatar']) ? $meta['avatar'] :'' ?>" id="cimg" class="img-fluid img-thumbnail" alt="">
				</div>
			</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label">Last Name</label>
						<input name="lastname" class="form-control" required="" value="
						<?php echo isset($lastname) ? $lastname : '' ?>">
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">First Name</label>
						<input name="firstname" class="form-control" required="" value="<?php echo isset($firstname) ? $firstname : '' ?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="">Middle Name</label>
						<input name="middlename" class="form-control" value="<?php echo isset($middlename) ? $middlename : '' ?>">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Address</label>
							<textarea name="address" id="" cols="30" rows="2" class="form-control" required=""><?php echo isset($address) ? $address : '' ?></textarea>
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Contact #</label>
						<input type="text" class="form-control" name="contact_no" value="<?php echo isset($contact_no) ? $contact_no : '' ?>">
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
							<label for="">Email</label>
							<input type="email" class="form-control" name="email" value="<?php echo isset($email) ? $email : '' ?>">
				</div>
				<div class="col-md-5">
					<div class="">
						<label for="">Tax ID</label>
						<input type="text" class="form-control" name="tax_id" value="<?php echo isset($tax_id) ? $tax_id : '' ?>">
					</div>
				</div>
				
          	</div>
			  <hr>	
				<div class="alert-danger">&nbsp;GUARANTOR INFORMATION</div>
				<hr>
				<div class="form-group">
				<p>Gurantor's Passport</p>
				<div class="custom-file">
  		  		<input type='file' name="img2"  class="custom-file-input rounded-circle" onchange="displayImg2(this,$(this))">
				<label class="custom-file-label" for="customFile">Choose file</label>
			</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-10">
				<img src="<?php echo isset($meta['g_avatar']) ? $meta['g_avatar'] :'' ?>" id="blah" class="img-fluid img-thumbnail" alt="">
			</div>
			</div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label">Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="g_name" type="text" class="form-control" required placeholder = "Guarantor's Name" value="<?php echo isset($g_name) ? $g_name : '' ?>">
                  </div>
                  </div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label">Relationship</label>
                  <div class="col-sm-10">
                  <input name="grela" type="text" class="form-control" placeholder="Relationship" required value="<?php echo isset($grela) ? $grela : '' ?>">
                  </div>
                </div>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label">Guarantor's Phone Number</label>
                  <div class="col-sm-10">
                  <input name="g_phone" type="text" class="form-control" required placeholder = "Guarantor's phoneNo" value="<?php echo isset($g_phone) ? $g_phone : '' ?>">
                  </div>
                  </div>
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label">Guarantor's Address</label>
                  	<div class="col-sm-10">
					<textarea name="gaddress"  class="form-control" rows="2" cols="30" <?php echo isset($gaddress) ? $gaddress : '' ?>></textarea>
           			 </div>

				
			</div>
		</form>
	</div>
</div>

<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]); // convert to base64 string
	    }
	}
	function displayImg2(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#blah').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]); // convert to base64 string
	    }
	}
	
	 $('#manage-borrower').submit(function(e){
	 	e.preventDefault()
	 	start_load()
	 	$.ajax({
	 		url:'ajax.php?action=save_borrower',
	 		method:'POST',
			enctype: 'multipart/form-data',
	 		data:$(this).serialize(),
	 		success:function(resp){
	 			if(resp == 1){
	 				alert_toast("Borrower data successfully saved.","success");
	 				setTimeout(function(e){
	 					location.reload()
	 				},1500)
	 			}
	 		}
	 	})
	 })
</script>