<html>
<body>
<?php 

    include('../config.php');

		$id = $_GET['id'];
				
		$sql = "UPDATE hostel SET appstatus='REJECTED' WHERE req_id='$id'";
				
		mysqli_query($con, $sql); 

		echo '<script type="text/javascript">
		alert("Successfully Update!");
		window.location = "approveStd.php";
		</script>';
?>
</body>
</html>