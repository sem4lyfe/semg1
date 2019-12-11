<?php
session_start();
//connectivity
require('../config.php');

if($_SESSION['user']=="")
{
	header('location:../index.php');
}
$username=$_SESSION['user'];
$sql="select * from users where username=$username";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];

//marquee display
$q = "SELECT marquee1 FROM admin WHERE id=1";
$q1 = mysqli_query($con,$q);
$disp = mysqli_fetch_array($q1);
//echo $disp['marquee1'];

//change colg name
$q2 = "SELECT colgname FROM admin WHERE id=1";
$q21 = mysqli_query($con,$q2);
$colgdisp = mysqli_fetch_array($q21);

//change footer 
$q4 = "SELECT footerinfo FROM admin WHERE id=1";
$q41 = mysqli_query($con,$q4);
$footerdisp = mysqli_fetch_array($q41);
//echo $footerdisp['footerinfo'];

?>
<html>
<head>
<title>Sample School Project</title>
<link rel="stylesheet" type="text/css" href="../engine/css/slideshow.css" media="screen" />
	<style type="text/css">.slideshow a#vlb{display:none}</style>
	<script type="text/javascript" src="../engine/js/mootools.js"></script>
	<script type="text/javascript" src="../engine/js/visualslideshow.js"></script>
    <link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF"><?=$colgdisp['colgname']?></a></font></b><marquee direction="left" height="100%">
			<?=$disp['marquee']?></marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <!--Slider-->
      <div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="../data1/images/banner_01.jpg" alt="Multispeciality College Campus" title="Multispeciality College Campus" id="wows1_0"/></li>
<li><img src="../data1/images/highlightnews.jpg" alt="International Accredition" title="International Accredition" id="wows1_1"/></li>
<li><img src="../data1/images/img21644.jpg" alt="Best Overall Employement" title="Best Overall Employement" id="wows1_2"/></li>
<li><img src="../data1/images/url.jpg" alt="Best Of Class Infrastructure" title="Best Of Class Infrastructure" id="wows1_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="Multispeciality College Campus"><img src="../data1/tooltips/banner_01.jpg" alt="Multispeciality College Campus"/>1</a>
<a href="#" title="International Accredition"><img src="../data1/tooltips/highlightnews.jpg" alt="International Accredition"/>2</a>
<a href="#" title="Best Overall Employement"><img src="../data1/tooltips/img21644.jpg" alt="Best Overall Employement"/>3</a>
<a href="#" title="Best Of Class Infrastructure"><img src="../data1/tooltips/url.jpg" alt="Best Of Class Infrastructure"/>4</a>
</div></div>
<span class="wsl"></span>
	<a href="#" class="ws_frame"></a>
	</div>
	<script type="text/javascript" src="../engine1/wowslider.js"></script>
	<script type="text/javascript" src="../engine1/script.js"></script>
    <!--slider end-->
    
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div><a href="index.php?option=viewstatus" style="text-decoration:none ; color:#010101" id="horizontalmenu li"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</b></a>
            <a href="index.php?option=hostel" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOSTEL APPLICATION</b></a>
                <a href="index.php?option=viewprofile" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIEW PROFILE</b></a>
  <a href="../logout.php" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGOUT</b></a></td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
    </html>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'viewstatus':
		include('viewstatus.php');
		break;
		case 'viewprofile':
		include('viewprofile.php');
		break;
                case 'hostel':
                include('applyhostel.php');
                break;
            case 'updateprofile':
                include('updateprofile.php');
                break;
		
	}}

	?>
      </td>
    </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; <?=$footerdisp['footerinfo']?></b></center></td>
    </tr>
  </tbody>
</table>
