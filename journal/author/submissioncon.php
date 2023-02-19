<?php
	$p="'".$_REQUEST["selects"]."'";
	$q="'".$_REQUEST["title"]."'";
	$r="'".$_REQUEST["atype"]."'";

	$a="'".$_REQUEST["key"]."'";
	$b="'".$_REQUEST["name"]."'";
	$w="'".$_REQUEST["add"]."'";
	$c="'".$_REQUEST["email"]."'";
															
	$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
	$query="insert into fileupload(subject,title,article,keyeword,name,address,email) values(".$p.",".$q.",".$r.",".$a.",".$b.",".$w.",".$c."	)";
	mysqli_query($connect,$query) or die("query failed");
	$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$file_store="upload/".$file_name;
//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

// if($file_name!="" && ($file_type="image/jpeg/tt"||$file_type="image/png/txt"||$file_type="image/gif")&& $file_size<=614400)
$to_email = ".$c.";
$subject = "Your Book Uploaded";
$body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
$headers = "From:researchjournal2000@gmail.com";
 

if(move_uploaded_file($file_path,$file_store))//"images" is just a folder name here we will load the file.
$query="insert into fileupload(subject,title,article,adstract,keyeword,name,address,email,emergency,emergency_date,journal_files) values(".$p.",".$q.",".$r.",".$a.",".$b.",".$w.",".$c.",)";
;//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
 
if($query==true)
{    
	echo "File Uploaded";
    header("location:submission_message.html");
	if (mail($to_email, $subject, $body, $headers))
 
{
    echo "Email successfully sent to $to_email...";
}
 
else
 
{
    echo "Email sending failed!";
}
    
}

	mysqli_close($connect); 
	
?>