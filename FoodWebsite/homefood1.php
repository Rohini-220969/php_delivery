<?php
$con=mysqli_connect("localhost","root","","foodweb");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['login']))
{
    $username=$_POST['uname'];
    $useremail=$_POST['uemail'];
    $userpassword=$_POST['upassword'];
    echo $username."<br>",$userpassword."<br>";
$sql="SELECT uname,uemail,upassword FROM customer WHERE uname= '$username' " ;

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
    {

    $row=mysqli_fetch_assoc($result);
    $dsname=$row['uname'];
    $dpswd=$row['upassword'];
    $dpemail=$row['uemail'];
   
    if($username==$dsname && $userpassword==$dpswd && $useremail==$dpemail)
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
    header('Location:loginfoodfast.html');
    exit();
}
