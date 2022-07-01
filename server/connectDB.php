<?php
$db_host="localhost";
$db_user="root";
$db_password="kim5192!";
$db_name="Person";
$con=mysqli_connect($db_host, $db_user, $db_password, $db_name);
$receive=$_POST['id'];
#$sql_value="SELECT number FROM person_num";
#$value=mysqli_query($con,$sql_value);

echo "$receive";

echo "MariaDB Connected.", "<br>";

#$row = mysqli_fetch_array($value) 
#$flag=$row["number"];


$sql_update="UPDATE person_num SET number=$receive WHERE number>-1";
$result=mysqli_query($con,$sql_update);

 

mysqli_close($con);
?>
