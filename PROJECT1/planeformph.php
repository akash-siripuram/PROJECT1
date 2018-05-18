<?php
if (isset($_POST['submit'])) 
{
$user = $_POST['name'];
$email = $_POST['email'];
$to= $_POST['country'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into flight values('$user','$email','$to','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: planeform.html");
}

?>