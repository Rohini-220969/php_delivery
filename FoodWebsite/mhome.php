<?php
$con=mysqli_connect("localhost","root","","userdb");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['signup']))
{
$sid=$_POST['uid'];
$sname=$_POST['uname'];
$spassword=$_POST['upassword'];
$semail=$_POST['uemail'];
echo $sid."<br>",$sname."<br>",$spassword."<br>",$semail."<br>";
$sql="INSERT INTO userdetails( uid, uname,  uemail, upassword) VALUES ('$sid','$sname','$semail','$spassword') ";

if(mysqli_query($con,$sql)){
    echo "registration successfully";
  
   }
else{
    echo " registration not successfully";
    mysqli_error($con);
   }


}
else{
    header('Location:registration.php');
    exit();


}
?>