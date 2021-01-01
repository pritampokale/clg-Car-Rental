<?php
$server="localhost";
$username="root";
$password="";
$db="carrental";

$conn=mysqli_connect($server,$username,$password,$db);

						$your_name=$_POST['your_name'];
						$your_email=$_POST['your_email'];
						$your_enquiry=$_POST['your_enquiry'];
						
						
$sql="insert into con_request values('$your_name','$your_email','$your_enquiry')";
$result=mysqli_query($conn,$sql);

if($result)
{echo "contact form is succesfully submited";
}
else
{
echo "there are something issue while creating your request";
}
?>