<?php
if (isset($_POST['submit'])) 
{
$user = $_POST['firstname'];
$tpass = $_POST['Aadhar'];
$complaint= $_POST['textarea'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into police values('$user','$tpass','$complaint','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: policeform.html");
    alert("finished");
}

?>