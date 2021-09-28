 <?php
$server="localhost";
$username="root";
$password="";
$dbname="student";
error_reporting(0);
$con =new mysqli($server,$username,$password,$dbname);
$query = "SELECT * FROM details";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

?>
<body>
<h1><a href="st2.php">BACK TO HOME</h1></a>
   <p><a href ="http://localhost/studentmanagementsystem/modify.php">MODIFY DETAILS</p></a>
<div><form action="" method ="GET">
   <br>ROLL NUMBER :<input type="text" name ="rollnum" value="" placeholder="roll number" required/><br><br>
   <br><input type="submit" name ="update" ></input>
 

<?php
$rm=$_GET['rollnum'];
if($total!=0)
{
while($result = mysqli_fetch_assoc($data))
{
if($rm==$result['Roll Number'])
{?> <table border="3">
   <tr>
       <th>name</th>
       <th>roll number</th>
       <th>mathematics</th>
       <th>physics</th>
       <th>chemistry</th>	
       <th>english</th>
	<th colspan="2">operation</th>
   </tr><?php
$nm=$result['Name'];
$ch=$result['Chemistry'];$ph=$result['Physics'];$m=$result['Mathematics'];$e=$result['English'];
echo "<tr>
       <td>".$result['Name']."</td>
       <td>".$result['Roll Number']."</td>
       <td>".$result['Mathematics']."</td>
       <td>".$result['Physics']."</td>
       <td>".$result['Chemistry']."</td>
       <td>".$result['English']."</td>
	<th ><a href='insert.php?rm=$rm&nm=$nm&e=$e&m=$m&ph=$ph&ch=$ch'>EDIT</th>
	<th ><a href='del.php?rm=$rm' onclick='return checkdel()'>DELETE</th>
   </tr></div>";

}
}
}?>
<script>
function checkdel(){
return confirm("Are you sure you want to delete");

}

</script>

<style>
   h1{ 
    text-align:left;
    background-color:#27A09E;

    }
   p{ 
    text-align:center;
    background-color:#D3F5CE;
    font-size:60px;
    }
div,table
{
border:2px solid green;
      border-margin:190px;
      box-shadow:1px 2px 1px 3px;
margin:25px ;
padding: 30 100;
}
h{
font-size:400%;
color:#FFC7D4;
}
</style>