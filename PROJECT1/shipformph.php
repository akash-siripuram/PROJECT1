<?php
if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$email = $_POST['email'];
$memb= $_POST['members'];
$prices= $_POST['prices'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into water values('$name','$email','$memb','$prices','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: shipform.html");
}
?>