<?php
// $con= mysqli_connect("localhost","root","Root@123");//keep password inside "Root@123" if you are using password for mysql
// mysqli_select_db("upload_file_db",$con);//replace upload_file_db with your database name.
$con=$mysql = new mysqli("localhost","root","","upload_file_db");
if(@$_POST['submit'])
{
//storing all necessary data into the respective variables.
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$file_store="upload/".$file_name;
//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

// if($file_name!="" && ($file_type="image/jpeg/txt"||$file_type="image/png/txt"||$file_type="image/gif")&& $file_size<=614400)

if(move_uploaded_file($file_path,$file_store))//"images" is just a folder name here we will load the file.
$query=mysqli_query($con,"insert into files_tbl(files_tbl)values('$file_name')");//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
 
if($query==true)
{
    echo "File Uploaded";
}
}

//To retrieve uploaded file immediately or write code in separate .php file if you wanna later or by clicking.
// $result=  mysql_query("SELECT photo FROM user");
// $row=  mysql_fetch_array($result);
// echo "<img src='images/".$row['photo']."' height = '130px' width = '130px'>";
?>