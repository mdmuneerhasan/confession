<?php
include("dbcon.php");
$name=$_REQUEST['name'];
$mob=$_REQUEST['mob'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$password=$_REQUEST['p'];
$status='n';
$query="INSERT INTO `userdata`( `name`, `mobile number`, `email`, `gender`, `password`, `status`) VALUES ('$name','$mob','$email','$gender','$password','$status')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{ 
header('location:login.php?ss=1');
}
?>