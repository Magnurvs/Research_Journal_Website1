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
        .tableh{
            position: absolute;
            top: 98px;
            left: 1256px;
        }
        
        
    </style>
</head>

<body>
    <div class="nav1">
        <nav class="nav">

            <a class="nav-link" id="nv" href="../index.html" >Logout</a>
        </nav>
    </div>
   <!-- <iframe name="frame1" src="">
	
</iframe>-->


<div class="">
    <?php
    $sql1 = "SELECT id FROM `input_id`";

    // $query1 = mysqli_query($connect,$sql1);

    // $sql2 = "SELECT id FROM `signup` WHERE role='reviewer'";

    // $query2 = mysqli_query($connect,$sql2);
    
    // if($query1==$query2)
    // {

    ?>             
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
      	<th>First name</th>
      	<th>Last name</th>

      	<th>Address</th>
        <th>Give Feedback</th>

      </tr>
    </thead>
    <tbody>
    	<?php

			$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");

      $CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];

      echo $CurrenLogntRoleId;

      $getUpId= "SELECT Auth_id FROM `configration_reviwer_tbl` where Revi_id=".$CurrenLogntRoleId;

      $res=mysqli_query($connect,$getUpId);

      $rs=mysqli_num_rows($res);

      echo $rs;

      $getAllDetails="select * from author where Author_id='$CurrenLogntRoleId'";

      $result=mysqli_query($connect,$getAllDetails);

      $frs=mysqli_num_rows($result);

      while($frs=mysqli_fetch_array($result))
      {
          

      ?>
      <tr>
      <td><?php echo $frs['author_id'] ?></td>       
      <td><?php echo $frs['fname'] ?></td>
      <td><?php echo $frs['lname'] ?></td>
      <td><?php echo $frs['address'] ?></td>
      <td>
        <a href="review.php?pauth_id=<?php echo $frs['author_id'] ?>&revi_id=<?php echo $CurrenLogntRoleId ?>">Here</a>
      </td>
      
<?php  }  
			
			// $selectquery = "SELECT * FROM `fileupload`";
			
			// $query = mysqli_query($connect,$selectquery);
			
			// $num = mysqli_num_rows($query);

			// echo "<h1> ".$num."&nbsp; File are there</h1>";
            
           
 
            ?>
    
</div>
<?php   ?>
</body>



</html>

