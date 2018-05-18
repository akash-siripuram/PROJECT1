<?php
if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$med = $_POST['medid'];
$prob= $_POST['problem'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into hospital values('$name','$med','$prob','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: hospitalform.html");
}

?>