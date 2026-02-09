<?php
$files=scandir("upload");
$files=array_diff($files,array('.','..'));

echo "<h2 ><center>Gallery of images</center></h2>";
    foreach ($files as $image){
        
     echo '<div style=" display:inline-block; text-align:center; margin-left: 10px;">';
        echo '<img src="upload/'.$image.'" width="400px" height="300px" >';
        echo '<p><a href="download.php?file='.$image.'">Download</a></p>';
    }
  
