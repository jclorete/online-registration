<?php
	include('connect.php');
	if(ISSET($_POST['add_juniorhigh'])){
		$family_name = $_POST['family_name'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
        
        $date_of_birth = $_POST['date_of_birth'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];  

        $grade_level = $_POST['grade_level'];
		$religion = $_POST['religion'];
		$cultural_classification = $_POST['cultural_classification'];

        $facebook_account = $_POST['facebook_account'];
		$email_address = $_POST['email_address'];
		$Mobile = $_POST['Mobile'];

        $place_of_birth = $_POST['place_of_birth'];
		$citizenship = $_POST['citizenship'];
		$address = $_POST['address'];

        $father_name = $_POST['father_name'];
		$father_occupation = $_POST['father_occupation'];
		$father_attainment = $_POST['father_attainment'];

        $father_contact = $_POST['father_contact'];
		$father_facebook = $_POST['father_facebook'];
		$mother_name = $_POST['mother_name'];
        
        $mother_occupation = $_POST['mother_occupation'];
		$mother_attainment = $_POST['mother_attainment'];
		$mother_contact = $_POST['mother_contact'];
		
        $mother_facebook = $_POST['mother_facebook'];
		$parents_income = $_POST['parents_income'];
		$guardian_name = $_POST['guardian_name'];

        $guardian_adress = $_POST['guardian_adress'];
		$g_mobile = $_POST['g_mobile'];
		$e_name = $_POST['e_name'];
        
        $e_adress = $_POST['e_adress'];
		$e_mobile = $_POST['e_mobile'];
		$s_name = $_POST['s_name'];

        $grade = $_POST['grade'];
		
		$status ='pending';
		$submitted_date= date("Y-m-d H:i:s");
        
        $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);	

        $reportcard = addslashes(file_get_contents($_FILES['reportcard']['tmp_name']));
		$reportcard_name = addslashes($_FILES['reportcard']['name']);
        move_uploaded_file($_FILES['reportcard']['tmp_name'],"../photo/" . $_FILES['reportcard']['name']);	
        
        $certificate_of_good_moral = addslashes(file_get_contents($_FILES['certificate_of_good_moral']['tmp_name']));
		$certificate_of_good_moral_name = addslashes($_FILES['certificate_of_good_moral']['name']);
		$photo_size = getimagesize($_FILES['certificate_of_good_moral']['tmp_name']);
        move_uploaded_file($_FILES['certificate_of_good_moral']['tmp_name'],"../photo/" . $_FILES['certificate_of_good_moral']['name']);	

        $psa_birth_certificate = addslashes(file_get_contents($_FILES['psa_birth_certificate']['tmp_name']));
		$psa_birth_certificate_name = addslashes($_FILES['psa_birth_certificate']['name']);
		$photo_size = getimagesize($_FILES['psa_birth_certificate']['tmp_name']);
		move_uploaded_file($_FILES['psa_birth_certificate']['tmp_name'],"../photo/" . $_FILES['psa_birth_certificate']['name']);
        
        $conn->query("INSERT INTO `juniorhigh` (family_name, first_name, middle_name, date_of_birth, age, 
        gender, grade_level, religion, cultural_classification, facebook_account, email_address, Mobile,
         place_of_birth, citizenship, address, father_name, father_occupation, father_attainment, father_contact, 
         father_facebook, mother_name, mother_occupation, mother_attainment, mother_contact, mother_facebook, parents_income, 
         guardian_name, guardian_adress, g_mobile, e_name, e_adress, e_mobile, s_name, grade, photo, reportcard, 
         certificate_of_good_moral, psa_birth_certificate, status, submitted_date) 
            VALUES('$family_name', '$first_name', '$middle_name', '$date_of_birth', '$age', '$gender', 
             '$grade_level','$religion', '$cultural_classification', '$facebook_account','$email_address', '$Mobile',
             '$place_of_birth', '$citizenship', '$address', '$father_name', '$father_occupation', 
            '$father_attainment', '$father_contact', '$father_facebook', '$mother_name', '$mother_occupation', '$mother_attainment',
            '$mother_contact', '$mother_facebook', '$parents_income', '$guardian_name', '$guardian_adress', '$g_mobile',
			'$e_name', '$e_adress', '$e_mobile', '$s_name', '$grade', '$photo_name','$reportcard_name', '$certificate_of_good_moral_name', '$psa_birth_certificate_name', '$status', '$submitted_date')");
			header("location:account.php");
		}
	
?>