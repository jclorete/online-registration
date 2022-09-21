<?php
	include('connect.php');
	if(ISSET($_POST['add_gradeschool'])){
		$family_name = $_POST['family_name'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
        
        $religion = $_POST['religion'];
		$citizenship = $_POST['citizenship'];
		$date_of_birth = $_POST['date_of_birth'];

        $gender = $_POST['gender'];
		$place_of_birth = $_POST['place_of_birth'];
		$address_in_zamboanga = $_POST['address_in_zamboanga'];

        $tel_mobile = $_POST['tel_mobile'];
		$grade_level = $_POST['grade_level'];
		$father_name = $_POST['father_name'];

        $father_occupation = $_POST['father_occupation'];
		$mother_name = $_POST['mother_name'];
		$mother_occupation = $_POST['mother_occupation'];

        $guardian_name = $_POST['guardian_name'];
		$guardian_address = $_POST['guardian_address'];
		$guardian_tel_mobile = $_POST['guardian_tel_mobile'];

        $friend_name = $_POST['friend_name'];
		$friend_address = $_POST['friend_address'];
		$friend_tel_mobile = $_POST['friend_tel_mobile'];


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
        
        $conn->query("INSERT INTO `gradeschool` (family_name, first_name, middle_name, religion, citizenship, date_of_birth,
            gender, place_of_birth, address_in_zamboanga, tel_mobile, grade_level, father_name, father_occupation, mother_name,
            mother_occupation, guardian_name, guardian_address, guardian_tel_mobile, friend_name, friend_address, friend_tel_mobile,
            photo, reportcard, certificate_of_good_moral, psa_birth_certificate, status, submitted_date) 
            VALUES('$family_name', '$first_name', '$middle_name', '$religion', '$citizenship', '$date_of_birth', '$gender', 
            '$place_of_birth', '$address_in_zamboanga',
            '$tel_mobile', '$grade_level', '$father_name','$father_occupation', '$mother_name', '$mother_occupation', '$guardian_name', '$guardian_address', '$guardian_tel_mobile', '$friend_name', 
            '$friend_address', '$friend_tel_mobile', '$photo_name', '$reportcard_name', '$certificate_of_good_moral_name', '$psa_birth_certificate_name', '$status', '$submitted_date')");
			header("location:account.php");
		}
	
?>