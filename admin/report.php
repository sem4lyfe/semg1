<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h2>Report By Application</h2></center>
<center>
<table>
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php
    session_start();
    error_reporting(1);
    include('../config.php');

    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='PENDING'");
    $kira = mysqli_num_rows($result);
        
      while($row = mysqli_fetch_array($result)){
        $id = $row['req_id'];
        $stdName = $row['id'];
        $status = $row['appstatus'];

?>

  <tr>
    <td><?php echo $id;?></td>
    <td><?php echo $stdName;?></td>
    <td><?php echo $status;?></td>
  </tr>

<?php
}
?>
  <tr><td colspan="3" style="text-align:right">Number of PENDING application : <?=$kira?></td>

</table>

<br></br>
<h2>Approved Student</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php
    session_start();
    error_reporting(1);
    include('config.php');

    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='APPROVED'");
    $kira = mysqli_num_rows($result);
        
      while($row = mysqli_fetch_array($result)){
        $id = $row['req_id'];
        $stdName = $row['id'];
        $status = $row['appstatus'];

?>

  <tr>
    <td><?php echo $id;?></td>
    <td><?php echo $stdName;?></td>
    <td><?php echo $status;?></td>
  </tr>

<?php
}
?>
<tr><td colspan="3" style="text-align:right">Number of APPROVED application : <?=$kira?></td>
</table>


<br></br>
<h2>Rejected Student</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php
    session_start();
    error_reporting(1);
    include('config.php');

    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='REJECTED'");
     $kira = mysqli_num_rows($result);   
      while($row = mysqli_fetch_array($result)){
          $id = $row['req_id'];
        $stdName = $row['id'];
        $status = $row['appstatus'];

?>

  <tr>
    <td><?php echo $id;?></td>
    <td><?php echo $stdName;?></td>
    <td><?php echo $status;?></td>
  </tr>

<?php
}
?>
<tr><td colspan="3" style="text-align:right">Number of REJECTED application : <?=$kira?></td>
</table>
</center>
</body>
</html>

