<?php
	include('connect.php');
	if(ISSET($_POST['add_college'])){
		$family_name = $_POST['family_name'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
        
        $religion = $_POST['religion'];
		$citizenship = $_POST['citizenship'];
		$date_of_birth = $_POST['date_of_birth'];

        $gender = $_POST['gender'];
		$place_of_birth = $_POST['place_of_birth'];
		$address_in_zamboanga = $_POST['Address'];

        $Mobile = $_POST['Mobile'];
		$Course = $_POST['Course'];
		$father_name = $_POST['father_name'];

        $father_occupation = $_POST['father_occupation'];
		$mother_name = $_POST['mother_name'];
		$mother_occupation = $_POST['mother_occupation'];
		
        $guardian_name = $_POST['guardian_name'];
		$guardian_address = $_POST['guardian_address'];
		$g_Mobile = $_POST['g_Mobile'];

        $e_Name = $_POST['e_Name'];
		$e_adress = $_POST['e_adress'];
		$e_Mobile = $_POST['e_Mobile'];


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
        
        $conn->query("INSERT INTO `college` ( family_name, first_name, middle_name, religion, citizenship, date_of_birth, 
        gender, place_of_birth, Address, Mobile, Course, father_name, father_occupation, mother_name,
         mother_occupation, guardian_name, guardian_address, g_Mobile, e_Name, e_adress, e_Mobile, photo, 
         report_card, Certificate_of_Good_Moral, PSA_Birth_Certificate, status, submitted_date) 
            VALUES('$family_name', '$first_name', '$middle_name', '$religion', '$citizenship', '$date_of_birth', '$gender', 
            '$place_of_birth', '$Address',
            '$Mobile', '$Course', '$father_name','$father_occupation', '$mother_name', '$mother_occupation', '$guardian_name', '$guardian_address', '$g_Mobile', '$e_Name', 
            $e_adress', '$e_Mobile', 
            '$photo_name', '$reportcard_name', '$certificate_of_good_moral_name', '$psa_birth_certificate_name', '$status', '$submitted_date')");
			header("location:account.php");
		}
	
?>