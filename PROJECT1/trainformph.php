<?php
if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$email = $_POST['email'];
$toplace= $_POST['toplace'];
 $fair= $_POST['fair'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into train values('$name','$email','$toplace','$fair','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: trainform.html");
}
?>