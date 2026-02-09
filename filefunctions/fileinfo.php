<?php
$filename="data.txt";
if(file_exists($filename)){
    echo "file exist"."<br>";
    echo "file size: ".filesize($filename)." bytes"."<br>";
    echo "File Type:".filetype($filename)."<br>";
    echo "last access time:".date("d-m-y h:i:s",fileatime($filename))."<br>";
    echo "last modified time:".date("d-m-y h:i:s",filemtime($filename))."<br>";
    echo "last change time:".date("d-m-y h:i:s",filectime($filename))."<br>";
    echo "file permissions".substr(sprintf('%o',fileperms($filename)),-4)."<br>";
    echo "file owner:".fileowner($filename)."<br>"; 
    echo "file group id".filegroup($filename)."<br>";   
    echo"file inode no:".fileinode($filename)."<br>";
    

}
else{
    echo "file not exsits";
}