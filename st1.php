<html>
<head>
</head>
<body>
<h>STUDENT REGISTRATION MANAGEMENT SYSTEM</h><br><br><br>
<div class="column">
<div class="right">
<div class="nav">
<a href="#log">LOGIN</a>
</div>
<div class="info" onclick="hov()">
   <div><form action="" method ="GET">
<br>NAME :<input type="text" name ="name" placeholder="name" required/><br><br>
      <br>PASSWORD  :<input type="password" name ="password" placeholder="password" required/><br><br>
      
      <br><input type="submit" name ="submit" "/>
</div>
    </form>
</div>
<?php
error_reporting(0);
$nm=$_GET['name'];
$em=$_GET['password'];
if($_GET['submit'])
{
if (($nm=="kirti")&&($em == "123Abc##"))
{
?>  <script>alert("LOGIN SUCCESSFULLLY");</script><br><META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/st2.php"><?php

}
else
{
?>  <script>alert("WRONG PASSWORD OR USERNAME");</script><META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/studentmanagementsystem/st1.php"> <?php
}}?>
<script>
function hov(){

<style>
.info:active{color:yellow; documesnt.write("uhudwehuh");}
</style>


</script>



</body>
<style>

button:hover{color:pink;}
.left{float: right;
  width: 25%;}
body{
margin:150px;
border:2px solid green;
      border-margin:190px;
      box-shadow:1px 2px 1px 3px;
padding:50px;

}
h{
font-size:2em;color:#b3b3b3;
}
.row {
  margin: 8px 950px 8px 6px;
}

.right {
  float: left;
  width: 25%;
}
.ryt{
	align:right;
}
.nav {

	  overflow: hidden;
}
.info{border:2px solid green;
      border-margin:190px;}


</style>