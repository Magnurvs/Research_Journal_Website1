<?php
/*$connect=mysqli_connect("localhost","root","","journal") or die("connection Failed");
 




$files=mysqli_fetch_all($result,MYSQLI_ASSOC);

*/

$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
			
			// $query="SELECT * FROM `files`";
			
			// $result = mysqli_query($connect,$query);

			// $files=mysqli_fetch_all($result,MYSQLI_ASSOC);



			

if(isset($_GET['file_id']))
{
	
	$id=$_GET['file_id'];

	$sql="SELECT * FROM files WHERE id=$id";

	$result=mysqli_query($connect,$sql);

	$files=mysqli_fetch_assoc($result);

	$filepath='upload/' .$file['name'];

	if(file_exists($filepath))
	{
		header('Content-Type:application/octet-stream');

		header('Content-Description: File Transfer');

		header('Content-Disposition: attachment; filename=' .basename($filepath));

		header('Expires:0');

		header('Cache-Control:must-revalidate');
		header('pragma:public');

		header('Content-Length:' .filesize('upload/' .$file['name']));

		readfile('upload/' . $file['name']);


		$newCount=$file['download'] + 1;

		$updatQuery="UPDATE	files SET download=$newCount WHERE id=$id";

		mysqli_query($connect,$updatQuery);

		exit;
	}
}
?>