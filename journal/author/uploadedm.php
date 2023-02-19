<?php include 'downloadfile.php'; ?>

<!DOCTYPE html>
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
  <?php 
    $CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];
    echo $CurrenLogntRoleId;
    $sqli="SELECT * FROM `file_mst_tbl` where auth_id=".$CurrenLogntRoleId;

$result= mysqli_query($connect,$sqli);

$filess=mysqli_fetch_all($result,MYSQLI_ASSOC);
  ?>
 
	<div class="">
             
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>Sr No</th>
      	<th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       <?php  foreach($filess as $file):?>
       <tr>
         <td><?php echo $file['File_id']; ?></td>
         <td><?php echo $file['filename']; ?></td>
         
         <td>
           <a href="uploadedm.php?file_id=<?php echo $file['File_id'] ?>">Click here to download</a>
         </td>
       </tr>
     <?php endforeach ; ?>
    </tbody>
</body>
</html>