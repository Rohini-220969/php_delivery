<?php

 
if(isset($_POST["upload"])){
    $filename=$_FILES['fn']['name'];
    $size=$_FILES['fn']['size'];
    $tempname=$_FILES['fn']['tmp_name'];
    $destination="upload/".$filename;
    if(move_uploaded_file($tempname,$destination)){

        echo "<p style='color:green ; text-align:center;'>file uploaded successfully</p>"."<br><br>";
        echo "<a href='gallery.php ' >View Gallery</a>"."<br><br>";
        echo "<a href='download.php?file=".$filename."'><button>Download file</button></a>";

    }
    else{
        echo " <p style='color:red;'>there is a problem uploading the file</p> ";
    }
}
  


?>