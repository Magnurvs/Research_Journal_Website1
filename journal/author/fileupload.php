<?php
$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");


if(isset($_POST['uploadfile'])){

	$filename=$_FILES['file']['name'];

	$destination='upload/' . $filename;

	$extension = pathinfo($filename,PATHINFO_EXTENSION);

	$file=$_FILES['file']['tmp_name'];

	$size=$_FILES['file']['size'];
	// $FileData=realpath($file);
	// echo $FileData;

	if(!in_array($extension,['pdf']))
	{
		echo "Your File extension must be .pdf";

	}
	elseif($_FILES['file']['size'] > 1000000)
	{
		echo "the File is too large";
	}
	else
	{
		// foreach($_FILES["files"]["error"] as $key=>$error){
		// 	if($error==UPLOAD_ERR_OK){
		// 		$tem_name=$_FILES["files"]["name"][$key];
		// 		$name=$_FILES["files"]["name"][$key];
		// 		move_uploaded_file($file,$destination);
		// 	}
			
		}
		if(move_uploaded_file($file,$destination))
		{  
			$auth_id="'".$_REQUEST["auth_id"]."'";
			$p="'".$_REQUEST["selects"]."'";
			$q="'".$_REQUEST["title"]."'";
			$r="'".$_REQUEST["atype"]."'";
			$a="'".$_REQUEST["key"]."'";
			// $b="'".$_REQUEST["name"]."'";
			// $w="'".$_REQUEST["add"]."'";
			// $c="'".$_REQUEST["mail"]."'";
			
			// $fnm=$filename;
		  
			$sql= "INSERT INTO `file_mst_tbl` VALUES (0,".$auth_id.",'$filename',".$p.",".$q.",".$r.",".$a.")";
			if(mysqli_query($connect,$sql))
  			 {
				 //header("location:submit_success.html");
				 echo "uploaded";
				
			}
			else{
				echo "failed";
			}
		}
	}
	
	












?>