
<?php
	//$role=$_REQUEST["role"];
	//$usrname=$_REQUEST["txtmail"];
	//$usrpass=$_REQUEST["txtpass1"];
	$connect=mysqli_connect("localhost","root","","journal");
	if($connect===false)
	{
		die("connection failed");
	}


	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username=$_POST["txtmail"];
		$password=$_POST["txtpass1"];
		$Role=$_POST["role"];
		$CurrenLogntRoleId="";
		$result="";
		if($Role=='author'){
			$sql1="select * from author where username='".$username."' AND password='".$password."'";
			$result1=mysqli_query($connect,$sql1);
		    $row=mysqli_fetch_array($result1);
			if($row>0){	
                $CurrenLogntRoleId=$row['author_id'];   
				header("location:author/author_main.php?CurrenLogntRoleId=".$CurrenLogntRoleId);
				// $CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];
			}else{
                 echo "Author Not Found..!";
			}
		}elseif($Role=='reviewer'){
			$sql2="SELECT * FROM `reviewer` where username='".$username."' AND password='".$password."'";
			$result2=mysqli_query($connect,$sql2);
			
		    $row=mysqli_fetch_array($result2);
			
			if($row >0){
				$CurrenLogntRoleId=$row['reviewer_id'];   
				header("location:author/reviewer_main.php?CurrenLogntRoleId=".$CurrenLogntRoleId);
			}else{
				echo "Reviewer Not Found..!";
				
			}
		}
		elseif($Role=='admin'){
			$sql2="SELECT * FROM `signup` where username='".$username."' AND password='".$password."'";
			$result2=mysqli_query($connect,$sql2);
			
		    $row=mysqli_fetch_array($result2);
			
			if($row >0){
				$CurrenLogntRoleId=$row['id'];   
				header("location:admin.html?CurrenLogntRoleId=".$CurrenLogntRoleId);
			}else{
				echo "Reviewer Not Found..!";
				
			}
		}
		else{
			echo "User Not Found..!";
			echo $Role;
		}

		// $sql="select * from signup where username='".$username."' AND password='".$password."'";
		// $result=mysqli_query($connect,$sql);
		// $row=mysqli_fetch_array($result);
		// if($row["role"]=='reviewer')
		// {
		// 	header("location:author/reviewer_main.php");

		// }
		// elseif($row["role"]=='author')
		// {
			
		// 	header("location:author/author_main.html");

		// }
		// elseif($row["role"]=='editor')
		// {
			
		// 	header("location:editor.html");

		// }
		// elseif($row["role"]=='admin')
		// {
			
		// 	header("location:admin.html");

		// }
		// else
		// {
			
		// 	echo "login failed";
		// }
	}
	
?>