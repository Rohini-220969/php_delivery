<?php
$con=mysqli_connect("localhost","root","","userdb");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['login']))
{
    $sname=$_POST['uname'];
    $spassword=$_POST['upassword'];
    echo $sname."<br>",$spassword."<br>";
$sql="SELECT uid,upassword FROM userdetails WHERE uid= '$sname' " ;

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
    {

    $row=mysqli_fetch_assoc($result);
    $dsid=$row['uid'];
    $dpswd=$row['upassword'];
   
    if($sname==$dsid && $spassword==$dpswd)
    {
        echo "login success";
    }
    else{
        echo "please enter valid correct";
    }
}
else{
    echo "invalid user id";
}

}
else{
    header('Location:login.php');
    exit();
}
