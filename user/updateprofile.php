<?php
session_start();
require('../config.php');

	$query = "SELECT * FROM users WHERE username = '".$_SESSION['user']."' ";
	$cq = mysqli_query($con,$query);
	$user1 = mysqli_fetch_array($cq);
        
        if(isset($_POST['submitt'])){
            $name=$_POST['name'];
            $studid=$_POST['studid'];
            $username=$_POST['username'];
            $mob=$_POST['mob'];
            $address=$_POST['address'];
            
            $sql = "update users set name='$name',studid='$studid',mob='$mob',address='$address' where username='$username'";
            
            if(mysqli_query($con,$sql)){
                echo '<script type="text/JavaScript"> alert("Profile updated!");</script>';
		echo "<script>document.location='index.php?option=viewprofile'</script>";
            }
            else{
                echo "Error : ".mysqli-error($con);
            }
            
        }
?>
<style>
.input{
	cellpadding:5;
}
</style>

<h1 style="color:#000000"><b><center>User Profile</center></b></h1>
<div align="center">
<table cellpadding="15" style="background-color:#e6e6e6">
    <form method="POST" action="">
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="<?=$user1['name']?>"></td>
    </tr>
    <tr>
        <td>Student ID</td>
        <td><input type="text" name="studid" value="<?=$user1['studid']?>"></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?=$user1['username']?>" readonly></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="text" name="gender" value="<?=$user1['gender']?>" readonly></td>
    </tr>
    <tr>
        <td>Mobile Phone</td>
        <td><input type="text" name="mob" value="<?=$user1['mob']?>"></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><input type="text" name="address" value="<?=$user1['address']?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submitt" value="UPDATE PROFILE" readonly></td>
    </tr>
    </form>
</table>

