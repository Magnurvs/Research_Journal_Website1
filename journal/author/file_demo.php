<?php include 'fileupload.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		button{
			height: 30px;
			width: 80px;
		}
	</style>
</head>
<body>
	<form action="file_demo.php" method="post" enctype="multipart/form-data">
		<h2>Upload File</h2>
		<input type="file" name="file"><br><br>
		<button type="submit"  name="save">Upload</button>
	</form>
</body>
</html>