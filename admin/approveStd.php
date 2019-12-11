<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

.button {
    background-color: #4CAF50; /* Green */
    border-radius: 8px;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family: Optima, Segoe, "Segoe UI", Candara, Calibri, Arial, sans-serif;
    cursor: pointer;
  font-size: 12px;
  border-radius: 8px;
}

</style>
</head>
<body>
<h2>List of application</h2>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  <?php
    session_start();
    error_reporting(1);
    include('../config.php');

    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='PENDING'");
        
      while($row = mysqli_fetch_array($result)){
        $id = $row['req_id'];
        $stdName = $row['id'];
        $status = $row['appstatus'];

?>

  <tr>
    <td><?php echo $id;?></td>
    <td><?php echo $stdName;?></td>
    <td><?php echo $status;?></td>
    <td>
      <a class="button" href="updateStd.php?id=<?php echo $id?>">Approve</a>
      <a class="button" href="rejectStd.php?id=<?php echo $id?>">Reject</a>
    </td>
  </tr>

<?php
}
?>

</table>

<br></br>
<h2>Approved Student</h2>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php
    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='APPROVED'");
        
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

</table>


<br></br>
<h2>Rejected Student</h2>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php

    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='REJECTED'");
        
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

</table>

<br></br>
<h2>Cancelled Student</h2>
<table id="customers">
  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Status</th>
  </tr>

  <?php
    $result = mysqli_query($con, "SELECT * FROM hostel WHERE appstatus='CANCELLED'");
        
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

</table>
</body>
</html>

