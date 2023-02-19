<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">
		h1{
			text-align: center;
		}
	</style>
</head>
<body>

		<h1>Most Recent</h1>
		<table class="table table-hover">
			<!-- <thead>
			<tr>
				<th>ID</th>
				<th>Fname</th>
				<th>Lname</th>
				<th>Email</th>
			</tr>
			</thead> -->
			<tbody>
				<?php

					$connect=mysqli_connect("localhost","root","","journal") or die("connection Failed");

					$query="SELECT * FROM `fileupload` ORDER  BY id DESC LIMIT 5 ";

					$query_run=mysqli_query($connect,$query) or die("Query Failed");

					
					
						foreach($query_run as $row)
						{
							?>

							<tr>
								<td><a href=""><?php echo $row['subject'] ?></a></td>
								<td><a href=""><?php echo $row['article'] ?></a></td>
								
							</tr>


							<?php
						}
					


				 ?>

			</tbody>
		</table>
	
</body>
</html>