<?php
if (isset($_POST['submit'])) 
{
$email = $_POST['emailsignup'];
$pwd = $_POST['pwdsignup'];
$no= $_POST['numbersignup'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into signup values('$email','$pwd','$no')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: login.html");
    alert("finished");
}

?>