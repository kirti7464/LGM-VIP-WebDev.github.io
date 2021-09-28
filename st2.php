<?php
$server="localhost";
$username="root";
$password="";
$db="customer";
$con = mysqli_connect($server,$username,$password,$db);
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
  <title>studentmanagSYS</title>
  </style>
</head>
<body>
  <h1><a href="http://localhost/studentmanagementsystem/st2.php">HOME</h1>
  <h2>STUDENT REGISTRATION MANAGEMENT SYSTEM</h2>
  <h3><a href="http://localhost/studentmanagementsystem/add.php">ADD DETAILS</h3>
  <h4><a href="http://localhost/studentmanagementsystem/modify.php">MODIFY  DETAILS</h4></a>
  <h4><a href="http://localhost/studentmanagementsystem/view.php">VIEW  DETAILS</h4></a>
  <h5>MADE BY:KIRTI</h5>
</body>
<style>
   a:active{background-color:yellow;}
   h1{ 
    text-align:left;
    background-color:#27A09E;
    border:2px solid powderblue;
    }
   h2{
    background:#f2f2f2;
    font-family:verdana;
    margin:60px;
    padding:60px;
    font-size:50px;
      border:2px solid green;
      border-margin:190px;
     
      box-shadow:1px 2px;
    }
   h3{
    background:#D3F5CE;
    padding:10px 10px 10px 600px;
    font-size:2em;
    }
    h4{ 
    background:#D3F5CE;
    padding:10px 10px 10px 600px;
    font-size:2em;
    }
    h5{
    padding:160px 0px 0px 550px;
    font-size:20px;
}
    body{
    background-image:url('');
    background-repeat:no-repeat;
    background-size:100%;
    }
</style>
</html>