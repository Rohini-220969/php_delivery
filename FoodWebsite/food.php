


 <?php
$con=mysqli_connect("localhost","root","","foodweb");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['register']))
{

$username=$_POST['cname'];
$userpassword=$_POST['cpassword'];
$useremail=$_POST['cemail'];
$userphone=$_POST['cphone'];
echo $username."<br>",$userpassword."<br>",$useremail."<br>",$userphone."<br>";
$sql="INSERT INTO customer( uname,  uemail, upassword, uphone) VALUES ('$username','$useremail','$userpassword','$userphone') ";

if(mysqli_query($con,$sql)){
    echo "registration successfully";
  
   }
else{
    echo " registration not successfully". mysqli_error($con);

   }


}
else{
    header('Location:registration.html');
    exit();


}
?> 