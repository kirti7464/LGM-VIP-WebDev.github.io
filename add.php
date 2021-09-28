<?php
$server="localhost";
$username="root";
$password="";
$dbname="student";
error_reporting(0);
$con =new mysqli($server,$username,$password,$dbname);

?>
<html>
<head></head>
<style>
 div{ 
      text-align:centre;
      border:2px solid green;
      border-margin:190px;
      padding:20px 20px;
      margin:60px 500px 70px 500px;
      box-shadow:1px 2px;
     }
   h1{ 
      background-color:#D3F5CE;
    border:2px solid powderblue;
    font-color:blue;
     }
     p{
     font-align:centre;
     font-family:verdana;
     background-color:#f2f2f2;
     border:2px solid green;
     border-margin:190px;
     box-shadow:1px 2px;
     font-size:60px;
     margin:60px 450px 60px 450px;
     padding:30px;
      }
     body{
     background-image:url("");
      }
</style>
<body>
<h1><a href="st2.php">HOME</h1></a>
   <p><a href ="http://localhost/studentmanagementsystem/add.php">ADD DETAILS</p></a>
<div><form action="" method ="GET">
      <br>NAME :<input type="text" name ="name" value="" placeholder="name" required/><br><br>
      <br>ROLL NUMBER   :<input type="text" name ="rollnum" placeholder="rollnumber" value="" required/><br><br>
      <br>MARKS IN MATHEMATICS:<input type="text" name ="maths" placeholder="maths" value="" required/><br><br>
      <br>MARKS IN PHYSICS:<input type="text" name ="phy" placeholder="physics" value="" required/><br><br>
      <br>MARKS IN CHEMISTRY:<input type="text" name ="chem" placeholder="chemistry" value="" required/><br><br>
      <br>MARKS IN ENGLISH:<input type="text" name ="eng" placeholder="english" value="" required/><br><br>
      <br><input type="submit" name ="update" />
    </form>
</div>

<?php
$nm=$_GET['name'];
$rm=$_GET['rollnum'];
$mat=$_GET['maths'];
$ph=$_GET['phy'];
$che=$_GET['chem'];
$eng=$_GET['eng'];

$query = "INSERT INTO `details`(`Name`, `Roll Number`, `Mathematics`, `Physics`, `Chemistry`, `English`) VALUES ('$nm','$rm','$mat','$ph','$che','$eng')";
$data = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($data);
if($_GET['update'])
{
?><script>alert("SUCCESSFULLY ADDED");</script><?php
}
else
{
?><script>alert("FAILED TO ADDED");</script><?php
}
?>
</body>
