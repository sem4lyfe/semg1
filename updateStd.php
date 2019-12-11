<html>
<body>
<?php 

    include('../config.php');

		$id = $_GET['id'];
				
		$sql = "UPDATE hostel SET appstatus='APPROVED' WHERE req_id='$id'";
				
		if(mysqli_query($con, $sql)){

		echo '<script type="text/javascript">
		alert("Successfully Update!");
		window.location = "approveStd.php";
		</script>';
                }
                else{
                    echo "Error : ".mysqli_error($con);
                }
?>
</body>
</html>