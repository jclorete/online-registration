<?php
	require_once 'connect.php';
	if(ISSET($_POST['approve_gradeschool'])){
		$conn->query("UPDATE `gradeschool` SET `status` = 'approved' WHERE `id_gradeschool` = '$_REQUEST[id_gradeschool]'");
		header("location:room.php");
	}
?>