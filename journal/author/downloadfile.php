<?php
$connect=mysqli_connect("localhost","root","","journal") or die("connection Failed");
 
$sqli="SELECT * FROM `file_mst_tbl`";

$result= mysqli_query($connect,$sqli);

$files=mysqli_fetch_all($result,MYSQLI_ASSOC);




if(isset($_GET['file_id']))
{
	
	$id=$_GET['file_id'];

	$sql="SELECT * FROM file_mst_tbl WHERE File_id=$id";

	$result=mysqli_query($connect,$sql);

	$file=mysqli_fetch_assoc($result);

	$filepath='upload/' .$file['filename'];

	if(file_exists($filepath))
	{
		header('Content-Type:application/octet-stream');

		header('Content-Description: File Transfer');

		header('Content-Disposition: attachment; filename=' .basename($filepath));

		header('Expires:0');

		header('Cache-Control:must-revalidate');
		header('pragma:public');

		header('Content-Length:' .filesize('upload/' .$file['filename']));

		readfile('upload/' . $file['filename']);


		// $newCount=$file['download'] + 1;

		// $updatQuery="UPDATE	files SET download=$newCount WHERE id=$id";

		// mysqli_query($connect,$updatQuery);

		exit;
	}
}
?>
