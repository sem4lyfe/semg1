<?php
session_start();
require('../config.php');

	$query = "SELECT * FROM users WHERE username = '".$_SESSION['user']."' ";
	$cq = mysqli_query($con,$query);
	$user1 = mysqli_fetch_array($cq);
        $id = $user1['id'];
        $sql="select * from hostel where id='$id'";
        $cq1 = mysqli_query($con,$sql);	
?>
<style>
.input{
	cellpadding:5;
}
</style>

<h1 style="color:#000000"><b><center>View Status Hostel</center></b></h1>
<div align="center">
<table cellpadding="15" style="background-color:#e6e6e6">
    <thead>
    <th>Student ID</th>
    <th>Request ID</th>
    <th>Hostel Name</th>
    <th>Hostel Block</th>
    <th>Hostel Append</th>
    <th>Request Date</th>
    <th>Hostel Status</th>
    <th>Reason</th>
    <th>Offer Letter</th>
    <th>Action</th>
    </thead>
    
    <?php
    while($user= mysqli_fetch_assoc($cq1)){
        if($user['appstatus']=='pending'){
      echo "<tr><td>".$user['id']."</td><td>".$user['req_id']."</td>"
              . "<td>".$user['hostelname']."</td><td>".$user['hostelblock']."</td>"
              . "<td>".$user['hostelappend']."</td><td>".$user['reqdate']."</td>"
              . "<td>".$user['appstatus']."</td><td>".$user['reason']."</td><td>N/A</td><td><a href='cancel.php?id=".$user['req_id']."'>Cancel Application</a></td>"; 
        }
       else if($user['appstatus']=='REJECTED'){
      echo "<tr><td>".$user['id']."</td><td>".$user['req_id']."</td>"
              . "<td>".$user['hostelname']."</td><td>".$user['hostelblock']."</td>"
              . "<td>".$user['hostelappend']."</td><td>".$user['reqdate']."</td>"
              . "<td>".$user['appstatus']."</td><td>".$user['reason']."</td><td>N/A</td><td>N/A</td>"; 
        }
         else if($user['appstatus']=='CANCELLED'){
      echo "<tr><td>".$user['id']."</td><td>".$user['req_id']."</td>"
              . "<td>".$user['hostelname']."</td><td>".$user['hostelblock']."</td>"
              . "<td>".$user['hostelappend']."</td><td>".$user['reqdate']."</td>"
              . "<td>".$user['appstatus']."</td><td>".$user['reason']."</td><td>N/A</td><td>N/A</td>"; 
        }
        else{
            echo "<tr><td>".$user['id']."</td><td>".$user['req_id']."</td>"
              . "<td>".$user['hostelname']."</td><td>".$user['hostelblock']."</td>"
              . "<td>".$user['hostelappend']."</td><td>".$user['reqdate']."</td>"
              . "<td>".$user['appstatus']."</td><td>".$user['reason']."</td><td><a href='offer_letter.php?id=".$user['req_id']."' target='_blank'>Click here for offer letter</a></td><td><a href='cancel.php?id=".$user['req_id']."' onclick='confirm(Are you sure you want to cancel?)'>Cancel Application</a></td>"; 
        }
    }
    ?>
	
</table>
</div>