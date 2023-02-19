<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php  
        	$CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];
            $connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
			$selectquery = "SELECT * FROM `configration_reviwer_tbl` WHERE Auth_id=".$CurrenLogntRoleId;
            $res=mysqli_query($connect,$selectquery);
            $revi_id=mysqli_fetch_all($res,MYSQLI_ASSOC);
            $storeRec=array();
            foreach($revi_id as $rec){
            
                $r_details="select * from reviewer where reviewer_id=".$rec['Revi_id'];
                $result=mysqli_query($connect,$r_details);
                $array=mysqli_fetch_all($result,MYSQLI_ASSOC);
                $rows[]=$array;    
            }
                 
    
    ?>
    <table class="table table-over">
        <thead>
            <tr>
            <th>Sr No</th>
            <th>Name</th>
            <th>Email</th>
</tr>
        </thead>
        <tbody>
        <?php  foreach($rows as $file):?>
       <tr>
         <td><?php echo $file[0]['reviewer_id']; ?></td>
         <td><?php echo $file[0]['fname']." ".$file[0]['mname']." ".$file[0]['lname'] ?></td>
         <td><?php echo $file[0]['username']; ?></td>
       </tr>
     <?php endforeach ; ?>
        </tbody>

    </table>
</body>
</html>