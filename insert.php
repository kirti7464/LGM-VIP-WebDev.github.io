<?php
$server="localhost";
$username="root";
$password="";
$dbname="student";
error_reporting(0);
$con =new mysqli($server,$username,$password,$dbname);
$query2 = "SELECT * FROM details";
$data2 = mysqli_query($con,$query2);
$total2 = mysqli_num_rows($data2);

?>
<html>
<head><title>EDITING DETAILS</title></head>
<style>
div
{
border:2px solid green;
      border-margin:190px;
      box-shadow:1px 2px 1px 3px;
margin:25px ;
padding: 30 100;
}
h{
font-size:400%;
background-color:#D3F5CE;
}
   h1{ 
    text-align:left;
    background-color:#D3F5CE;

    }
</style>
<body>
<center>
<h1><a href="st2.php">BACK TO HOME</h1></a>
<h>EDIT DETAILS OF THE STUDENT</h>
<div><form action="" method ="GET">
       <br><b>Roll Number:<input type="text" name ="roll" placeholder="rollnumber" value="<?php echo $_GET['rm']; ?> " /></b><br><br>
      <br><b>NAME :<input type="text" name ="name" value="<?php echo $_GET['nm']; ?>" placeholder="name" /></b><br><br>

      <br><b>MARKS IN MATHEMATICS:<input type="text" name ="maths" placeholder="maths" value="<?php echo $_GET['m']; ?>" /></b><br><br>
      <br><b>MARKS IN PHYSICS:<input type="text" name ="phy" placeholder="physics" value="<?php echo $_GET['ph']; ?>" /></b><br><br>
      <br><b>MARKS IN CHEMISTRY:<input type="text" name ="chem" placeholder="chemistry" value="<?php echo $_GET['ch']; ?>" /></b><br><br>
      <br><b>MARKS IN ENGLISH:<input type="text" name ="eng" placeholder="english" value="<?php echo $_GET['e']; ?>" /></b><br><br>
      <br><b><input type="submit" name ="update"  />
    </form>
</div>
</center>
<?php

$nam=$_GET['name'];
$rm=$_GET['roll'];
$math=$_GET['maths'];
$phy=$_GET['phy'];
$chem=$_GET['chem'];
$engl=$_GET['eng'];

$query1 = "UPDATE `details` SET `Name`='$nam',`Roll Number`='$rm',`Mathematics`='$math',`Physics`='$phy',`Chemistry`='$chem',`English`='$engl' WHERE `details`.`Roll Number`='$rm' ";
$data1 = mysqli_query($con,$query1);
$res=mysqli_fetch_assoc($data1);
if(mysqli_query($con,$query1)){
echo "<script>alert('SUCCESSFULLY EDITED');</script>";
?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/modify.php"><?php
}
else{
echo "<script>alert('SORRY,PROCESS FAILED');</script>";
?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/modify.php"><?php
}
?>
</body>
</html>