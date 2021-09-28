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

if($total!=0)
{
?>
 <!DOCTYPE html>
<html>
 <head>
   <title>view</title>
 </head>
 <body>
   <h1><a href="st2.php">BACK TO HOME</h1></a>
   <p><a href="http://localhost/studentmanagementsystem/st2.php">VIEW ALL STUDENT DETAILS</p></a>
   <div>
     <table style="width 100%">
 <table border="3">
   <tr>
       <th>name</th>
       <th>roll number</th>
       <th>mathematics</th>
       <th>physics</th>
       <th>chemistry</th>
       <th>english</th>
   </tr>
  </div>
 </body>
 <style>
   h1{ 
    text-align:left;
    background-color:#D3F5CE;

    }
   p{
     font-align:centre;
     font-family:verdana;
     background-color:#f2f2f2;
     font-size:60px;
     margin:60px 350px;
     padding:30px;
     border:2px solid green;
      border-margin:190px;
     
      box-shadow:1px 2px;
     }
    table,th,tr{
     border:2px solid black;
    
     }
    
     div{
     margin:60px;
     padding:40px 400px;font-size:30px;
     }
     body{
    background-image:url('bankii.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    }
 </style>
</html>
<?php
while($result = mysqli_fetch_assoc($data))
{
echo "<tr>
       <td>".$result['Name']."</td>
       <td>".$result['Roll Number']."</td>
       <td>".$result['Mathematics']."</td>
       <td>".$result['Physics']."</td>
       <td>".$result['Chemistry']."</td>
       <td>".$result['English']."</td>
   </tr>";
}}
else
{
echo "number of record is".$total;
}


?>
 </table>