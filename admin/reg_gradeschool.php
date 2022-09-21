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
				<div class = "alert alert-info">Registration/ Grade School</div>
                <form method = "POST" enctype = "multipart/form-data">
                    <div class = "form-inline" style = "float:left;">
						<label>Family Name</label>
						<br />
						<input type = "text" name="family_name" value = "" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>First Name</label>
						<br />
						<input type = "text" name="first_name" value = "" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middle Name</label>
						<br />
						<input type = "text" value = "" name="middle_name" class = "form-control" size = "40" required/>
					</div>
					<br style = "clear:both;"/>
                    <br/>

                    <div class = "form-inline" style = "float:left;">
						<label>Religion</label>
						<br />
						<input type = "text" name="religion" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Citizenship</label>
						<br />
						<input type = "text" name="citizenship" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Date Of Birth</label>
						<br />
						<input type = "date" name="date_of_birth" value = "" class = "form-control" style="width: 100%;" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Gender</label>
						<br />
                    <select class="form-control" name="gender" style="width: 100%;">
                    <option selected disabled>Select gender:</option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                    </select>					
                    </div>   
					<br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Place of Birth</label>
						<br />
						<input type = "text" name="place_of_birth" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address in Zamboanga City</label>
						<br />
						<input type = "text" name="address_in_zamboanga" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="tel_mobile" value = "" class = "form-control" size = "40" required/>
					</div>

                    <br style = "clear:both;"/>
                    <br/>
                    <div class="form-inline" ">
                    <label>Grade Level</label>
						<br />
                    <select class="form-control" name="grade_level">
                    <option selected disabled> Enrolling in Grade</option>
                    <option value="1">Grade 1</option>
                    <option value="2">Grade 2</option>
                    <option value="3">Grade 3</option>
                    <option value="4">Grade 4</option>
                    <option value="5">Grade 5</option>
                    <option value="6">Grade 6</option>
                  </select>
                    </div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Father Name</label>
						<br />
						<input type = "text" name="father_name" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Occupation</label>
						<br />
						<input type = "text" name="father_occupation" value = "" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Mother Name</label>
						<br />
						<input type = "text" name="mother_name" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Occupation</label>
						<br />
						<input type = "text" name="mother_occupation" value = "" class = "form-control" size = "40" required/>
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
						<input type = "text" name="guardian_name" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Guardian Address</label>
						<br />
						<input type = "text" name="guardian_address" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="guardian_tel_mobile" value = "" class = "form-control" size = "40" required/>
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
						<input type = "text" name="friend_name" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address</label>
						<br />
						<input type = "text" name="friend_address" value = "" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="friend_tel_mobile" value = "" class = "form-control" size = "40" required/>
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
							<button name = "add_gradeschool" class = "btn btn-success" style="width: 50%;"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
                    <?php
                    require_once('add_query_gradeschool.php');
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