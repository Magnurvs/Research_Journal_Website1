
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .btn{
      background-color: #004C8F;
      color: white;
      border: none;
      border-radius: 10px;
      text-decoration: none;
    }
    a{
      color: white;
    }
    p{
      opacity: 50%;
    }
  </style>
</head>
<body>

<div class="">
             
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
      	<th>Fname</th>
      	<th>Mname</th>
      	<th>Lname</th>
      	<th>Address</th>
      	<th>Email</th>
        <th>Enter ID of Reviewer</th>
        <th>Action</th>
      	
      </tr>
    </thead>
    <tbody>
    	<?php

			$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
			$selectquery = "SELECT * FROM `author`";
			$query = mysqli_query($connect,$selectquery);
			$num = mysqli_num_rows($query);
			echo "<h1> ".$num."&nbsp; Authors are there</h1>";?>
      <p>In the input field Enter the Id of the reviewer which you want to assign</p>
      <?php
			while($res=mysqli_fetch_array($query))
			{
				?> 

				<tr>
    				 <td><?php echo $res['author_id'] ?></td>
            <td><?php echo $res['fname'] ?></td>
            <td><?php echo $res['mname'] ?></td>
            <td><?php echo $res['lname'] ?></td>
            <td><?php echo $res['address'] ?></td>
            <td><?php echo $res['username'] ?></td>
            <td>
              <form action="input_id.php" method="POST">
                <input type="text" class="form-control" id="id"  name="id" placeholder="Enter ID">
                <input type="hidden"  class="form-control" name="auth_id" value="<?php echo $res['author_id'] ?>"/>
            </td>
    				<td><input type="submit"  id="<?php echo $res['author_id'] ?>" class="btn" value="Assign" name="submit"></td>
          </form>
    			</tr>
    		<?php	
			}

		?>



    	
    </tbody>
  </table>
</div>

</body>
</html>
