<?php

//connectivity
require('config.php');


if(isset($_POST['login']))
{
	$u = $_POST['uname'];
	$pass = $_POST['upass'];
	$p = md5($pass);
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
//user check
$q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
$cq = mysqli_query($con,$q);
$ret = mysqli_num_rows($cq);
if($ret == true)
{
	echo "<script>document.location='user/index.php?option=viewstatus'</script>";
	//echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
}
else
{
	echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}
}

?>
<html>
<body style="background-color:#E5E5E5">
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><font size="+2"><strong>Login Panel</strong></font></legend><p><b>UserName : </b><input type="text" name="uname" required/>*</p>
<p><b>Password : </b><input type="password" name="upass" required/>*</p><br>
<p><input type="submit" value="Login" name="login"/></p>
<p>Forgot password? Reset <a href="index.php?option=forgotpassword">here</a>.</p>
</fieldset>
</form>

<form method="post">
<div>
	Don't have an account? Click <a href="index.php?option=regs">here</a> to register.
        <br>
        Login as Administrator? Click <a href="admin">here</a> to login.
</div>
</form>

</div>
</body>
</html> 