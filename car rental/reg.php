<?php
$server="localhost";
$username="root";
$password="";
$db="carrental";

$conn=mysqli_connect($server,$username,$password,$db);

						$name=$_POST['name'];
						$contact=$_POST['contact'];
						$email=$_POST['email'];
						$address=$_POST['address'];
						$car=$_POST['car'];
						$pickup=$_POST['pickup'];
						$droppoint=$_POST['droppoint'];
						$fromdate=$_POST['fromdate'];
						$todate=$_POST['todate'];
						
$sql="insert into rent_request values('$name','$contact','$email','$address','$car','$pickup','$droppoint','$fromdate',$todate)";
$result=mysqli_query($conn,$sql);

if($result)
{echo "Car is Register. you get Messae how many charge you have to pay";
}
else
{
echo "there are something issue while creating your request";
}
?>