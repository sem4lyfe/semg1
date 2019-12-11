<?php
include '../config.php';

$id=$_GET['id'];

$sql="update hostel set appstatus='CANCELLED' where req_id='$id'";

if(mysqli_query($con,$sql)){
    header("Location:index.php?option=viewstatus");
}
else{
    echo "Error : ".mysqli_error($con);
}
?>