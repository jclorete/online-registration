<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
<?php
	include('header_nav.php');
	?>
<body>
	
<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Registration/ Junior High School</div>
					<form method = "POST">
                    <div class = "form-inline" style = "float:left;">
						<label>Family Name</label>
						<br />
						<input type = "text" value = "" name="family_name" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>First Name</label>
						<br />
						<input type = "text" name="first_name" value = "" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middle Name</label>
						<br />
						<input type = "text" name="middle_name" value = "" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <br/>
                    
                    <div class = "form-inline" style = "float:left;">
						<label>Place of Birth</label>
						<br />
						<input type = "text" name="place_of_birth" value = "" class = "form-control" size="40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
                    <label>Cityzenship</label>
						<br />
						<input type = "text" name="cityzenship" value = "" class = "form-control" size="40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
                    <label>Date Of Birth</label>
						<br />
						<input type = "date" name="date_of_birth" value = "" class = "form-control" style="width: 100%;" required/>
					</div>
                    
                    <br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
                    <label>Civil Status</label>
						<br />
						<input type = "text" name="civil_status" value = "" class = "form-control" size="40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
                    <label>Contact #</label>
						<br />
						<input type = "number" name="Contact" value = "" class = "form-control" size="40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Sex:</label>
						<br />
                    <select class="form-control" name="gender" style="width: 100%;">
                    <option selected disabled>Select sex:</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                    </select>					
                    </div>
                    <div class="form-inline" style="float: left; margin-left:20px;" name="level">
                    <label>Strand</label>
						<br />
                    <select class="form-control" name="strand">
                    <option selected disabled> Enrolling in Grade</option>
					<option value="7">STEM</option>
                    <option value="8">HUMSS</option>
                    <option value="9">ABM</option>
                    <option value="10">GAS</option>
                  </select>
                    </div>
                    <div class="form-inline" style="float: left; margin-left:20px;" name="level">
                    <label>Yeal level</label>
						<br />
                    <select class="form-control" name="yeal_level">
                    <option selected disabled> Enrolling in Grade</option>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
                  </select>
                    </div>
					<br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Present Address</label>
						<br />
						<input type = "text" value = "" name="present_address" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Provincial Address</label>
						<br />
						<input type = "text" value = "" name="provincial_address" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Email Address</label>
						<br />
						<input type = "text" value = "" name="email_address" class = "form-control" size = "40" required/>
					</div> 
                    <br style="clear: both;">
                    <br/>
                    <label style="color: red;">Parents Information</label>

                    <br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Father Name</label>
						<br />
						<input type = "text" value = "" name="father_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Occupation</label>
						<br />
						<input type = "text" value = "" name="father_occupation" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Mother Name</label>
						<br />
						<input type = "text" value = "" name="mother_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Occupation</label>
						<br />
						<input type = "text" value = "" name="mother_occupation" class = "form-control" size = "40" required/>
					</div>
                    
                <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
                    <label style="color: red;">If not residing with Parents</label>
                    </div>
                    <br>
					<br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Guardian Name</label>
						<br />
						<input type = "text" value = "" name="guardian_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Guardian Relation</label>
						<br />
						<input type = "text" value = "" name="guardian_relation" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Guardian Address</label>
						<br />
						<input type = "text" value = "" name="guardian_address" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Guardian Tel./Mobile #</label>
						<br />
						<input type = "text" value = "" name="Mobile" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
					<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" name="photo" required = "required" id = "photo"/>
						</div>
                        
                        <div class = "form-inline">
							<label>Report Card </label>
							<br/>
                            <div id = "report_preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "klk">[Photo]</center>
							</div>
							<input type = "file" id = "reportcard" name = "reportcard" />
						</div>
                        <div class = "form-inline">
							<label>Certificate of Good Moral</label>
							<br/>
                            <div id = "good_moral" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "moral">[Photo]</center>
							</div>
							<input type = "file" id="certificate_of_good_moral" name = "certificate_of_good_moral" />
						</div>
                        <div class = "form-inline">
							<label>PSA Birth Certificate</label>
							<br/>
                            <div id = "psa_preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "certificate">[Photo]</center>
							</div>
							<input type = "file" id="psa_birth_certificate"  name = "psa_birth_certificate" />
						</div>
                    <br style = "clear:both;"/>
					<br />
						<div class = "form-group">
                        <a name = "add_account" class = "btn btn-danger" href="home.php" style="width: 100px;"> Cancel</a>
							<button name = "add_seniorhigh" class = "btn btn-success" style="width: 50%;"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
					<?php require_once 'add_query_seniorhigh.php'
					?>
				</div>
			</div>
		</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>