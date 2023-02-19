<?php
/*$connect=mysqli_connect("localhost","root","","journal") or die("connection Failed");
 
$query="SELECT * FROM `files`";

$result= mysqli_query($connect,$query);

$files=mysqli_fetch_all($result,MYSQLI_ASSOC);

*/

$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
			
			$selectquery = "SELECT * FROM `fileupload`";
			
			$result = mysqli_query($connect,$selectquery);

			$files=mysqli_fetch_all($result,MYSQLI_ASSOC);

			$num = mysqli_num_rows($result);
			
			echo "<h1> ".$num."&nbsp; File are there</h1>";

if(isset($_GET['file_id']))
{
	
	$id=$_GET['file_id'];

	$sql="SELECT * FROM files WHERE id=$id";

	$result=mysqli_query($connect,$sql);

	$file=mysqli_fetch_assoc($result);

	$filepath='author/upload/' .$file['name'];

	if(file_exists($filepath))
	{
		header('Content-Type:application/octet-stream');

		header('Content-Description: File Transfer');

		header('Content-Disposition: attachment; filename=' .basename($filepath));

		header('Expires:0');

		header('Cache-Control:must-revalidate');
		header('pragma:public');

		header('Content-Length:' .filesize('author/upload/' .$file['name']));

		readfile('author/upload/' . $file['name']);


		$newCount=$file['download'] + 1;

		$updatQuery="UPDATE	files SET download=$newCount WHERE id=$id";

		mysqli_query($connect,$updatQuery);

		exit;
	}
}
?>