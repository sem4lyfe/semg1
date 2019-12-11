<?php

//connectivity
require('config.php');

if(isset($_POST['submit']))
{
	$u = $_POST['uname'];
	$e = $_POST['email'];
	$p1 = $_POST['psw1'];
	$p2 = $_POST['psw2'];
	
	$q = "SELECT * FROM users WHERE username='$u' AND email='$e'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
	if($ret == false)
	{
		echo '<script type="text/JavaScript"> alert("This user does not exist !");</script>';
	}
	else
	{
		if($p1 == $p2)//ensure the password match
		{
			$p3 = md5($p2);//password encryption
			
			$q1 = "UPDATE users SET password='$p3' WHERE email='$e'";
			$cq1 = mysqli_query($con,$q1);
			echo '<script type="text/JavaScript"> alert("Password has been reset !");</script>';
			echo "<script>document.location='index.php?option=login'</script>";
		}
		else
		{
			echo '<script type="text/JavaScript"> alert("Password did not match !");</script>';
		}
	}
}
?>

<html>
<body style="background-color:#E5E5E5">
<div align="center">

<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Forgot Password</strong></font></legend>
<br>
<table>
<tr><td><b>UserName :</td><td></b><input type="text" name="uname" required></td></tr><tr></tr>
<tr><td><b>Email : </td><td></b><input type="text" name="email" required></td></tr><tr></tr>
<tr><td><b>Enter new password : </td><td></b><input type="password" name="psw1" required></td></tr><tr></tr>
<tr><td><b>Confirm password : </td><td></b><input type="password" name="psw2" required></td></tr>
</table><br>
<p><input type="submit" value="Submit" name="submit"/></p>
</fieldset>
</form>

</div>
</body>
</html> 