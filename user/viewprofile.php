<?php
session_start();
require('../config.php');

	$query = "SELECT * FROM users WHERE username = '".$_SESSION['user']."' ";
	$cq = mysqli_query($con,$query);
	$user1 = mysqli_fetch_array($cq);
?>
<style>
.input{
	cellpadding:5;
}
</style>

<h1 style="color:#000000"><b><center>User Profile</center></b></h1>
<div align="center">
<table cellpadding="15" style="background-color:#e6e6e6">
    <tr>
        <td>Name</td>
        <td><?=$user1['name']?></td>
    </tr>
    <tr>
        <td>Student ID</td>
        <td><?=$user1['studid']?></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><?=$user1['username']?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?=$user1['gender']?></td>
    </tr>
    <tr>
        <td>Mobile Phone</td>
        <td><?=$user1['mob']?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?=$user1['address']?></td>
    </tr>
    <tr>
        <td></td>
        <td><form method="POST" action="index.php?option=updateprofile"><input type="submit" name="submit" value="UPDATE PROFILE" readonly></form></td>
    </tr>
</table>

