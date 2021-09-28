<?php
$server="localhost";
$username="root";
$password="";
$dbname="student";
error_reporting(0);
$con =new mysqli($server,$username,$password,$dbname);
$query = "SELECT * FROM details";
$data2 = mysqli_query($con,$query);
$total2 = mysqli_num_rows($data2);

$rm= $_GET['rm'];

$query1= "DELETE FROM `details` WHERE `details`.`Roll Number` = $rm;";
$data = mysqli_query($con,$query1);
if($data)
{
echo "<script>alert('DELETED');</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/modify.php">
<?php
}
else
{
echo "<script>alert('Sorry, Delete Process Failed ');</script>";
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/modify.php">
<?php
}
