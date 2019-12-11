<?php
session_start();
require('../config.php');
$id=$_GET['id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$query = "SELECT * FROM users WHERE username = '".$_SESSION['user']."' ";
$cq = mysqli_query($con,$query);
$user1 = mysqli_fetch_array($cq);
$idd = $user1['id'];
$query1 = "SELECT * FROM hostel WHERE req_id='$id' and id='$idd'";
$cql = mysqli_query($con,$query1);
$row = mysqli_fetch_array($cql);

?>
<body>
    <h1>ABC Group Of Institution</h1>
    <br>
    <?=date("Y-m-d");?>
    <br>
    As your application on <?=$row['reqdate']?> , your application for <?=$row['hostelname']?> in Block <?=$row['hostelblock']?> has been APPROVED!
    <br>
    Please print this report as your reference.
    <br>
    Thank you!
    <br>
    <br>
    <br>
    Director Of ABC Institute
</body>

