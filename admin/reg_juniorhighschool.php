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
					<form method = "POST" enctype = "multipart/form-data" action="add_query_juniorhigh.php">
                    <div class = "form-inline" style = "float:left;">
						<label>Family Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="family_name" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>First Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="first_name" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middle Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="middle_name" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <br/>
                    
                    <div class = "form-inline" style = "float:left;">
						<label>Date Of Birth</label>
						<br />
						<input type = "date" value = "" class = "form-control" name="date_of_birth" style="width: 100%;" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Age:</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="age" size = "5" required/>
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
                    <div class="form-inline" style="float: left; margin-left:20px;" name="grade_level">
                    <label>Grade Level</label>
						<br />
						<select class="form-control" name="grade_level">
                    <option selected disabled> Enrolling in Grade</option>
                    <option value="7">Grade 7</option>
                    <option value="8">Grade 8</option>
                    <option value="9">Grade 9</option>
                    <option value="10">Grade 10</option>
                  </select>
                    </div>
					<br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Religion</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="religion" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Cultural Classification</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="cultural_classification" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Facebook Account</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="facebook_account" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Email address</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="email_address" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel. /Mobile #</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="Mobile" size = "40" required/>
					</div>
					<br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Place of Birth</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="place_of_birth" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Citizenship</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="citizenship" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address in Zamboanga City</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="address" size = "40" required/>
					</div>
                    
                    <br style = "clear:both;"/>
                    <br/>
                    
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Father Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="father_name" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Occupation</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="father_occupation" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Educational Attainment</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="father_attainment" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Father Contact #</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="father_contact" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Facebook Account</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="father_facebook" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Mother Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="mother_name" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Occupation</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="mother_occupation" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Educational Attainment</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="mother_attainment" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />

                <div class = "form-inline" style = "float:left;">
						<label>Mother Contact #</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="mother_contact" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Facebook Account</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="mother_facebook" size = "40" required/>
					</div>
                    
                    <br style = "clear:both;"/>
					<br />
                    <div class="form-inline">
                  <label>Parents Monthly income</label>
                  <select class="form-control" name="parents_income">
                    <option selected disabled> Select Income</option>
                    <option value="5,000-10,000">5,000-10,000</option>
                    <option value="11,000-15,000">11,000-15,000</option>
                    <option value="16,000-20,000">16,000-20,000</option>
                    <option value="21,000 above">21,000 above</option>
                    <option value="21,000 above">21,000 above</option>
                  </select>
                </div>
                <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
                    <label style="color: red;">If the Child live with gauradian, name of guardian</label>
                    </div>
                    <br>
					<br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Guardian Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="guardian_name" size = "40" />
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Guardian Adress</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="guardian_address" size = "40" />
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="guardian_mobile" size = "40" />
					</div>
                    <br style = "clear:both;"/>
					<br />
                    
                    <div class = "form-inline" style = "float:left;">
                    <label style="color: red;">In case of emergency, the nearest relative or friend to be contacted:</label>
                    </div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="friend_name" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="friend_address" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="friend_mobile" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <label style="color: red;">Brother/Sister in this school at present</label>

                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Name</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="bs_name" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Grade/Year</label>
						<br />
						<input type = "text" value = "" class = "form-control" name="bs_grade" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Name</label>
						<br />
						<input type = "text" value = "" name="bs_ii_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Grade/Year</label>
						<br />
						<input type = "text" value = "" name="bs_ii_grade" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Name</label>
						<br />
						<input type = "text" value = "" name="bs_iii_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Grade/Year</label>
						<br />
						<input type = "text" value = "" name="bs_iii_grade" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Name</label>
						<br />
						<input type = "text" value = "" name="bs_iv_name" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Grade/Year</label>
						<br />
						<input type = "text" value = "" name="bs_iv_grade" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
                    <br/>
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
							<button name = "add_juniorhigh" class = "btn btn-success" style="width: 50%;"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
					<?php require_once 'add_query_juniorhigh.php'?>
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

    $(document).ready(function(){
		$lol = $('<img id = "ok" width = "100%" height = "100%"/>');
		$klk = $('<center id = "klk">[Photo]</center>');
		$("#reportcard").change(function(){
			$("#klk").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#ok").remove();
				$klk.appendTo("#report_preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$lol.appendTo("#report_preview");
					$("#ok").attr("src", this.result);
				}
			}
		});
	});


    $(document).ready(function(){
		$wow = $('<img id = "good" width = "100%" height = "100%"/>');
		$moral = $('<center id = "moral">[Photo]</center>');
		$("#certificate_of_good_moral").change(function(){
			$("#moral").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#good").remove();
				$moral.appendTo("#good_moral");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$wow.appendTo("#good_moral");
					$("#good").attr("src", this.result);
				}
			}
		});
	});

    
    $(document).ready(function(){
		$oko = $('<img id = "psa" width = "100%" height = "100%"/>');
		$certificate = $('<center id = "certificate">[Photo]</center>');
		$("#psa_birth_certificate").change(function(){
			$("#certificate").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#psa").remove();
				$certificate.appendTo("#psa_preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$oko.appendTo("#psa_preview");
					$("#psa").attr("src", this.result);
				}
			}
		});
	});

    
</script>
</html>