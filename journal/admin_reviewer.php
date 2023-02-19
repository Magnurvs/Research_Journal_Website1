
<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
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
      	
      </tr>
    </thead>
    <tbody>
    <?php
    	$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");

    	$selectquery = "SELECT * FROM `reviewer` ";

		$query = mysqli_query($connect,$selectquery);

		$num = mysqli_num_rows($query);

		echo "<h1> ".$num."&nbsp; Reviewer are there</h1>";

   
		while($res=mysqli_fetch_array($query))
		{
    		?>
        <tr>
            <td><?php echo $res['reviewer_id'] ?></td>
            <td><?php echo $res['fname'] ?></td>
            <td><?php echo $res['mname'] ?></td>
            <td><?php echo $res['lname'] ?></td>
            <td><?php echo $res['address'] ?></td>
            <td><?php echo $res['username'] ?></td>
            
            
          </tr>

        <?php }
         ?>
        
</body>
</html>