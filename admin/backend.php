<?php
session_start();
error_reporting(1);
if($_SESSION['admin']=="")
{
  header('location:../index.php');
}
else
{
  
//logout
if(isset($_POST['logout']))
{
  header('location:adminlogout.php');
}

include('../config.php');
//header marquee
if(isset($_POST['m1save']))
{
  $marquee = $_POST['marquee1'];
  $query = "UPDATE admin SET marquee1='$marquee' WHERE  id=1";
  mysqli_query($con,$query);
  $confirm ="<b style='color:red'>Page Saved</b>";
}

//colg name
if(isset($_POST['cnsave']))
{
  $cname = $_POST['colgname'];
  $query2 = "UPDATE admin SET colgname='$cname' WHERE id=1";
  mysqli_query($con,$query2);
  $confirm2 = "<b style='color:red'>Page Saved</b>";
}

//colg intro
if(isset($_POST['intsave']))
{
  $intro = $_POST['colgintro'];
  $query3 = "UPDATE admin SET colgintro='$intro' WHERE id=1";
  mysqli_query($con,$query3);
  $confirm3 = "<b style='color:red'>Page Saved</b>";
}

//footer info
if(isset($_POST['footersave']))
{
  $footer = $_POST['footerinfo'];
  $query4 = "UPDATE admin SET footerinfo='$footer' WHERE id=1";
  mysqli_query($con,$query4);
  $confirm4 = "<b style='color:red'>Page Saved</b>";
}

//about page
if(isset($_POST['aboutsave']))
{
  $abouthead = $_POST['abouthead'];
  $aboutinfo = $_POST['aboutinfo'];
  $query5 = "UPDATE admin SET abouthead='$abouthead' WHERE id=1";
  $query6 = "UPDATE admin SET aboutinfo='$aboutinfo' WHERE id=1";
  mysqli_query($con,$query5);
  mysqli_query($con,$query6);
  $confirm5 = "<b style='color:red'>Page Saved</b>";
}
?>
<div align="center">
<form method="post">
<table border="1">
  <tbody>
    <tr>
      <td colspan="3" bgcolor="#85C1E9"><center><font size="+2"><strong style="color: #FFFFFF">Administrator Control Panel</strong></font></center></td>
    </tr>

    <tr>
      <td colspan="3" bgcolor="#AED6F1"><h3 style="color: #FFFFFF">Edit "Home" Page</h3>
      </td>
    </tr>

    <tr>
      <td width="200">
        <p><b>Content of Header Marquee</b></p>
      </td>
      <td width="500">
        <textarea rows="4" cols="120" placeholder="Input Marquee for the header of the Page!" name="marquee1"></textarea>
      </td>
      <td>
        <center><input type="submit" onclick="displayOutput()" value="Save" name="m1save">
        <br><?php echo $confirm; ?></center>
      </td>
    </tr>
    
    <tr>
      <td>
        <p><b>Change College Name </b></p>
      </td>
      <td>
        <input type="text" placeholder="College Name" name="colgname" size="110">
       </td>
       <td>
        <center><input type="submit" onclick="displayOutput()" value="Save" name="cnsave">
        <br><?php echo $confirm2; ?></center></p>
      </td>
    </tr>

    <tr>
      <td>
        <p><b>Change College Intoduction</b></p>
      </td>
      <td>
        <textarea rows="4" cols="120" placeholder="Input Introduction for College" name="colgintro"></textarea>
      </td>
      <td>
        <center><input type="submit" value="Save" onclick="displayOutput()" name="intsave">
        <br><?php echo $confirm3; ?></p></center>
      </td>
    </tr>

    <tr>
      <td>
        <p><b>Change Footer</b></p>
      </td>
      <td>
        <input type="text" placeholder="copyright information etc," name="footerinfo" size="110">
      </td>
      <td>
        <center><input type="submit" value="Save" onclick="displayOutput()" name="footersave">
        <br><?php echo $confirm4; ?></p></center>
      </td>
    </tr>
      
    <tr>
      <td colspan="3" bgcolor="#AED6F1"><h3 style="color: #FFFFFF">Edit "About" Page</h3>
      </td>
    </tr>

    <tr>  
      <td>
        <p><b>Page Heading</b></p>
      </td>
      <td>
        <input type="text" placeholder="heading" name="abouthead" size="110">
      </td>
      <td rowspan="2">
        <center><input type="submit" value="Save" name="aboutsave" onclick="displayOutput()">
        <br><?php echo $confirm5; ?></p></center>
      </td>
    </tr>

    <tr>
      <td>
        <p><b>Page Content</b></p>
      </td>
      <td>
        <textarea rows="4" cols="120" placeholder="Input Content" name="aboutinfo"></textarea>
      </td>
    </tr>
  </tbody>
</table>
</form>
</div>

<?php
}
?>

<div align="center">
  <iframe id="myFrame" src="../index.php" width="800" height="1000"></iframe>

  <script>
    function displayOutput() {
    document.getElementById("myFrame").src = "../index.php";
    }
  </script>
</div>

