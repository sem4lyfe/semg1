<h1 style="color:#000000"><b><u><center>APPLY HOSTEL</center></u></b></h1>

<h3>
    <form action="" method="POST">
        <center><table width="100%">
            <tr>
                <td>Hostel Name</td><td><select name="hostelname">
            <option selected="true" disabled="disabled">Choose Hostel</option>
            <option value="Kolej Kediaman 1">Kolej Kediaman 1</option>
            <option value="Kolej Kediaman 2">Kolej Kediaman 2</option>
            <option value="Kolej Kediaman 3">Kolej Kediaman 3</option>
            <option value="Kolej Kediaman 4">Kolej Kediaman 4</option>
        </select>
                </td></tr>
            <tr><td>Hostel Block</td><td><select name="hostelblock">
            <option selected="true" disabled="disabled">Choose Block</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select></td></tr>
            <tr><td>Application Reason</td><td><input type="text" name="reason" required></td></tr>
            <tr><td></td><td><input type="submit" value="APPLY!" name="submit"></td></tr>
    </form>
</table>

</h3>
<?php
session_start();
include "../config.php";
if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date=date("Y-m-d");
    $hname=$_POST['hostelname'];
    $hblock=$_POST['hostelblock'];
    $reason=$_POST['reason'];
    
    $username=$_SESSION['user'];
    $sql="select * from users where username='$username'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $id=$row['id'];

    $sql1="insert into hostel(id, hostelname, hostelblock, hostelappend, reqdate, appstatus) VALUES('$id', '$hname', '$hblock', '$reason', '$date', 'pending')";
    
    if(mysqli_query($con,$sql1)){
        echo "<SCRIPT>alert('Your Approval In Pending Status. Please Check Back!');
			window.location.href='index.php';
			</SCRIPT>";
    }
    else{
        echo "Error : ".mysqli_error($con);
        die($username);
    }
    
}
?>

