<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	a{
    	text-decoration: none;
    	color: white;
    }
    button{
      background-color: #004C8F;
      color: white;
      border: none;
      border-radius: 10px;
      text-decoration: none;
    }
    h3{
    	
    	text-align: center;
    	text-decoration: underline;
    }
    

    </style>
</head>

<body>
				<table class="table table-hover">
					<thead>
						<tr>
						<th>ID</th>
						<th>Fname</th>
						<th>Lname</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");

							$query="SELECT * FROM `signup` where role='reviewer'";

							$result=mysqli_query($connect,$query) or die("query failed");

							while($res=mysqli_fetch_array($result))
							{
								?>
								<tr>
								<td><?php  echo $res['id'] ?></td>
								<td><?php  echo $res['fname'] ?></td>
								<td><?php  echo $res['lname'] ?></td>
								<td><button><a href="#">Assign</a></button></td>	
								</tr>
							<?php } ?>

					</tbody>
				</table>
</body>
</html>
