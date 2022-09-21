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

			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `gradeschool` WHERE `status` = 'pending'") ;
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `gradeschool` WHERE `status` = 'approved'") ;
				$f_ci = $q_ci->fetch_array();
				$e_ci = $conn->query("SELECT COUNT(*) as total FROM `gradeschool` WHERE `status` = 'decline'") ;
				$d_ci = $e_ci->fetch_array();
				$p_ci = $conn->query("SELECT COUNT(*) as total FROM `gradeschool` WHERE `status` = 'incomplete'") ;
				$i_ci = $p_ci->fetch_array();
			?>
			<div class = "panel-body">
            <div class = "alert alert-info">Grade School</div>

				<a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-info" href = "approvetbl__gradeschool.php"><span class = "badge"><?php echo $f_ci['total']?></span> Accepted</a>
                <a class = "btn btn-danger" href = ""><span class = "badge"><?php echo $d_ci['total']?></span> decline</a>
				<a class = "btn btn-danger" href = ""><span class = "badge"><?php echo $i_ci['total']?></span> incomplete</a>
				<a class = "btn btn-warning" href = ""><i class = "glyphicon glyphicon-eye-open"></i> Enrolled</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Picture</th>
							<th>Name</th>
							<th>Contact No</th>
							<th>Enrolling in </th>
							<th>Date Requested</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `gradeschool` WHERE `status` = 'Pending'");
							while($fetch = $query->fetch_array()){
						?>
						<tr>
						<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "100" width = "100"/></center></td>
							<td><?php echo $fetch['first_name']." ".$fetch['middle_name']." ".$fetch['family_name']?></td>
							<td><?php echo $fetch['tel_mobile']?></td>
							<td><?php echo $fetch['grade_level']?></td>
							<td><?php echo $fetch['submitted_date']?></td>
							<td><center><a class = "btn btn-success" href = "view_req_gradeschool.php?id_gradeschool=<?php echo $fetch['id_gradeschool']?>"><i class = "glyphicon glyphicon-check"></i>View</a></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>