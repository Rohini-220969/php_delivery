<?php
#file folder management
if(copy("data.txt","data2.txt")){
    echo "file copied successfully"."<br>";
}
else{
    echo "there is a problem copying the file"."<br>";
}
rename("dum.jpeg","dum2.jpeg");
echo file_exists("dum2.jpeg")?"file renamed successfully":"there is a problem renaming the file"."<br>";
unlink("chilli.jpeg");
echo file_exists("chilli.jpeg")?"file not deleted":"file deleted successfully"."<br>";
mkdir("myfolder");
echo file_exists("myfolder")?"folder created successfully":"there is a problem creating the folder"."<br>";
rmdir("myfolder");
echo file_exists("myfolder")?"folder not deleted":"folder deleted successfully"."<br>";
if(is_file("data.txt")){
    echo "data.txt is a file"."<br>";
}
else{
    echo "data.txt is not a file"."<br>";
}
if(is_dir("myfolder")){
    echo "myfolder is a directory"."<br>";
}
else{
    echo "myfolder is not a directory"."<br>";
}
$files=scandir(".");
foreach($files as $file){
    echo $file."<br>";
}
$dir=opendir("myfolder");
while(($file=readdir($dir))!==false){
    echo $file."<br>";
}
$dirr=readdir($dir);

closedir($dir);
echo "current working directory:".getcwd()."<br>";
chdir("..");

echo "current working directory:".getcwd()."<br>";

?>