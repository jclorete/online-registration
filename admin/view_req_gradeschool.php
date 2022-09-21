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
            <?php
						$query = $conn->query("SELECT * FROM `gradeschool` WHERE `id_gradeschool` = '$_REQUEST[id_gradeschool]'");
						$fetch = $query->fetch_array();
					?>
				<div class = "alert alert-info">Registration/ Grade School</div>
                <form method = "POST" enctype = "multipart/form-data">
                    
                    <div class = "form-inline" style = "float:left;">
						<label>Family Name</label>
						<br />
						<input type = "text" name="family_name" value = "<?php echo $fetch['family_name']?>" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>First Name</label>
						<br />
						<input type = "text" name="first_name" value = "<?php echo $fetch['first_name']?>" class = "form-control" size = "40" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Middle Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['middle_name']?>" name="middle_name" class = "form-control" size = "40" required/>
					</div>
					<br style = "clear:both;"/>
                    <br/>

                    <div class = "form-inline" style = "float:left;">
						<label>Religion</label>
						<br />
						<input type = "text" name="religion" value = "<?php echo $fetch['religion']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Citizenship</label>
						<br />
						<input type = "text" name="citizenship" value = "<?php echo $fetch['citizenship']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Date Of Birth</label>
						<br />
						<input type = "date" name="date_of_birth" value = "<?php echo $fetch['date_of_birth']?>" class = "form-control" style="width: 100%;" required/>
					</div>
					<div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Gender</label>
						<br />
                    <select class="form-control" name="gender" style="width: 100%;">
                    <option selected disabled>Select gender:</option>
                    <option value="F" <?php if($fetch['gender'] == "Standard"){echo "selected";}?>>Female</option>
                    <option value="M" <?php if($fetch['gender'] == "Standard"){echo "selected";}?>>Male</option>
                    </select>					
                    </div>
					<br style = "clear:both;"/>
                    <br/>
                    <div class = "form-inline" style = "float:left;">
						<label>Place of Birth</label>
						<br />
						<input type = "text" name="place_of_birth" value = "<?php echo $fetch['place_of_birth']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address in Zamboanga City</label>
						<br />
						<input type = "text" name="address_in_zamboanga" value = "<?php echo $fetch['address_in_zamboanga']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="tel_mobile" value = "<?php echo $fetch['tel_mobile']?>" class = "form-control" size = "40" required/>
					</div>

                    <br style = "clear:both;"/>
                    <br/>
                    <div class="form-inline" >
                    <label>Grade Level</label>
						<br />
                    <select class="form-control" name="grade_level">
                    <option selected disabled> Enrolling in Grade</option>
                    <option value="1"  <?php if($fetch['grade_level'] == "Grade 1"){echo "selected";}?>>Grade 1</option>
                    <option value="2"  <?php if($fetch['grade_level'] == "Grade 2"){echo "selected";}?>>Grade 2</option>
                    <option value="3"  <?php if($fetch['grade_level'] == "Grade 3"){echo "selected";}?>>Grade 3</option>
                    <option value="4" <?php if($fetch['grade_level'] == "Grade 4"){echo "selected";}?>>Grade 4</option>
                    <option value="5" <?php if($fetch['grade_level'] == "Grade 5"){echo "selected";}?>>Grade 5</option>
                    <option value="6" <?php if($fetch['grade_level'] == "Grade 6"){echo "selected";}?>>Grade 6</option>
                  </select>
                    </div>
                    <br style = "clear:both;"/>
                    <div class = "form-inline" style = "float:left;">
						<label>Father Name</label>
						<br />
						<input type = "text" name="father_name" value = "<?php echo $fetch['father_name']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Father Occupation</label>
						<br />
						<input type = "text" name="father_occupation" value = "<?php echo $fetch['father_occupation']?>" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-inline" style = "float:left;">
						<label>Mother Name</label>
						<br />
						<input type = "text" name="mother_name" value = "<?php echo $fetch['mother_name']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Mother Occupation</label>
						<br />
						<input type = "text" name="mother_occupation" value = "<?php echo $fetch['mother_occupation']?>" class = "form-control" size = "40" required/>
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
						<input type = "text" name="guardian_name" value = "<?php echo $fetch['guardian_name']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Guardian Address</label>
						<br />
						<input type = "text" name="guardian_address" value = "<?php echo $fetch['guardian_address']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="guardian_tel_mobile" value = "<?php echo $fetch['guardian_tel_mobile']?>" class = "form-control" size = "40" required/>
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
						<input type = "text" name="friend_name" value = "<?php echo $fetch['friend_name']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Address</label>
						<br />
						<input type = "text" name="friend_address" value = "<?php echo $fetch['friend_address']?>" class = "form-control" size = "40" required/>
					</div>
                    <div class = "form-inline" style = "float:left; margin-left:20px;">
						<label>Tel./Mobile #</label>
						<br />
						<input type = "number" name="friend_tel_mobile" value = "<?php echo $fetch['friend_tel_mobile']?>" class = "form-control" size = "40" required/>
					</div>
                    <br style = "clear:both;"/>
					<br />
                    <div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
                                <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" name="photo" id = "photo"/>
						</div>
                        
                        <div class = "form-group">
							<label>Report Card </label>
							<br/>
                            <div id = "report_preview" style = "width:150px; height :150px; border:1px solid #000;">
                                <img src = "../photo/<?php echo $fetch['reportcard']?>" id = "klk" width = "100%" height = "100%"/>
							</div>
							<input type = "file" id = "reportcard" name = "reportcard" />
						</div>
                        <div class = "form-group">
							<label>Certificate of Good Moral</label>
							<br/>
                            <div id = "good_moral" style = "width:150px; height :150px; border:1px solid #000;">
                                <img src = "../photo/<?php echo $fetch['certificate_of_good_moral']?>" id = "moral" width = "100%" height = "100%"/>
							</div>
							<input type = "file" id="certificate_of_good_moral" name = "certificate_of_good_moral" />
						</div>
                        <div class = "form-group">
							<label>PSA Birth Certificate</label>
							<br/>
                            <div id = "psa_preview" style = "width:150px; height :150px; border:1px solid #000;">
                                <img src = "../photo/<?php echo $fetch['psa_birth_certificate']?>" id = "certificate" width = "100%" height = "100%"/>
							</div>
							<input  type = "file" id="psa_birth_certificate"  name = "psa_birth_certificate" />
						</div>
                    <br style = "clear:both;"/>
					<br />
						<div class = "form-group">
                        <a name = "add_account" class = "btn btn-danger" href="home.php" > Cancel</a>
							<button name = "decline_gradeschool" class = "btn btn-warning"><i class = "glyphicon glyphicon-save"></i> Decline</button>
                            <button name = "incomplete_gradeschool" class = "btn btn-info"><i class = "glyphicon glyphicon-save"></i> Incomplete</button>
                            <button name = "approve_gradeschool" class = "btn btn-success"><i class = "glyphicon glyphicon-save"></i> Approve</button>
                        </div>
					</form>
                    <?php
                    require_once('approve_gradeschool.php');
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