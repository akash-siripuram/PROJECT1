<?php
if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$aad = $_POST['Aadhar'];
$acnt= $_POST['enquiry'];
$phno = $_POST['phoneno'];
$con=mysqli_connect("localhost","root","","project");
$sql="insert into bank values('$name','$aad','$acnt','$phno')";
//$sql="SELECT password FROM police WHERE name='$user'";
mysqli_query($con,$sql);
    header("Location: bankform.html");
}
?>