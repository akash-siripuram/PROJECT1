<?php
if (isset($_POST['submit'])) 
{
$emailsi=$_POST['emailsi'];
$pwdsi=$_POST['pwdsi'];
$con=mysqli_connect("localhost","root","","project");
 //$sql="insert into new values('nani','$ttpass')";
$sql="SELECT password FROM signup WHERE email='$emailsi'";
//mysqli_query($con,$sql);
$emailcheck="SELECT email FROM signup WHERE email='$emailsi'";  
     if($var=mysqli_query($con,$emailcheck))
     {
        if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
 // echo $row[0]."<br>";
  if($pwdsi ==  $row[0])
  {
      header("location:index.html");
      echo '$emailcheck';
  }
  else {     
  }
  }
    }
else
    {
        header("location:login.html");
    echo '$emailcheck';
    } 
     }
    else
    {
        header("location:login.html");
    }
}
?>