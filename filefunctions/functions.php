<?php

$lines=file("data.txt");
print_r($lines);
echo"<br> <br>";
foreach ($lines as $line)
    {
        echo $line."<br>";
    }


if(file_exists("iframes.html")){
    echo"file exist"."<br>";
   
}
else{
    echo "file not exsits";
}

echo"<br><br>";

$file=fopen("data.txt","r");
echo fread($file,filesize("data.txt"))."<br>";
fclose($file);

$file=fopen("test.txt","w");
  echo fwrite($file,"hello rohini")."<br>";
fclose($file);
//write data into file if not exists it will be created if exists it will be overwritten
$filename="sample.txt";
$content="this is sample file";
if(file_put_contents($filename,$content)){
    
    echo "file created successfully"."<br>";
    echo"data writtenn  to file successfully"."<br>";
}
else{
    echo "file creation failed";
}
#read data in afile

$filename="sample.txt";
$data=file_get_contents($filename);
echo $data."<br>";

//append data to file
$filename="sample.txt";
$content="\nthis is appended data";
$S=fopen($filename,"a");
if(fwrite($S,$content)){
    echo "data appended successfully"."<br>";
}
else{
    echo "failed to append data";
}
fclose($S);

$a=fopen("sample.txt","r+");
$content="\nthis is new content";
if(fwrite($a,$content)){
    echo "data written successfully"."<br>";
}
else{
    echo "failed to write data";
}
fclose($a);
$m=fopen("sample.txt","a+");
$content="\nthis is new content"; 
$red=fread($m,filesize("sample.txt"));
echo $red."<br>";
if(fwrite($m,$content)){
    echo "data written successfully"."<br>";
}
else{
    echo "failed to write data";
}
fclose($m);



 


?>