<?php include 'reviewer_download.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <style type="text/css">
        .nav1 {
            background-color: #004C8F;
            text-decoration: none;
            margin-top: 2px;
        }
        
        .nav1 a:hover {
            color: #f1f1f1;
            background-color: #ED232A;
        }
        
        .nav1 a:focus {
            color: #f1f1f1;
            background-color: #ED232A;
        }
        
        #nv {
            color: white;
        }
        
        iframe {
            height: 675px;
            width: 100%;
            border: solid 2px black;
        }
    </style>
</head>

<body>
    <div class="nav1">
        <nav class="nav">

            <a class="nav-link" id="nv" href="submission.html" target="frame1">Logout</a>
            

        </nav>
    </div>
   <!-- <iframe name="frame1" src="">
	
</iframe>-->


<div class="">
             
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
      	<th>Subject</th>
      	<th>Title</th>
      	<th>Article</th>
      	<th>Keyword</th>
      	<th>Name </th>
      	<th>Address</th>
      	<th>Email</th>
      	<th>File</th>
      </tr>
    </thead>
    <tbody>
    	<?php

			$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
			
			$selectquery = "SELECT * FROM `fileupload`";
			
			$query = mysqli_query($connect,$selectquery);
			
			$num = mysqli_num_rows($query);
			
			echo "<h1> ".$num."&nbsp; File are there</h1>";
			
			while($res=mysqli_fetch_array($query))
			{

					?>
				<?php  foreach($files as $file):?>
				<tr>
    				<td><?php echo $res['id'] ?></td>
    				<td><?php echo $res['subject'] ?></td>
    				<td><?php echo $res['title'] ?></td>
    				<td><?php echo $res['article'] ?></td>
    				<td><?php echo $res['keyeword'] ?></td>
    				<td><?php echo $res['name'] ?></td>
    				<td><?php echo $res['address'] ?></td>
    				<td><?php echo $res['email'] ?></td>
    				<td>
    					
           				<a href="reviewer_main.php?file_id=<?php echo $file['id'] ?>">Download</a>
           			<?php endforeach; ?>
         			</td>
    			</tr>

    		<?php	
    	
			}

		?>



    	
    </tbody>
  </table>
</div>
</body>



</html>

