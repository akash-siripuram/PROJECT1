<?php
if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$email = $_POST['email'];
$toplace= $_POST['toplace'];
$fairs= $_POST['fair'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into bus values('$name','$email','$toplace','$fairs','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: busform.html");
}
?>