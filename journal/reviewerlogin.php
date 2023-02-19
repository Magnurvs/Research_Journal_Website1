
<?php
	$role=$_REQUEST["role"];
	$usrname=$_REQUEST["txtmail"];
	$usrpass=$_REQUEST["txtpass1"];
	$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
	//$query="insert into login(username,password)values(".$x.",".$y.")
	$rs=mysqli_query($connect,"select role,username,password from signup") or die("query failed");
	$flag=0;
	session_start();
	while($array=mysqli_fetch_array($rs))
	{
		if($array[0]==$role && $array[1]==$usrname && $array[2]==$usrpass)
			{	
				$flag=1;
				break;
			}
		if($role=="reviewer")
		{
			$flag=1;
			break;
		}
			
	}
	
	if($flag==0)
	{
		$_SESSION['usrname']=$usrname;
		header("location:index.html");
		echo "login failed";	
		
	}

	else{

			$_SESSION['username']=$usrname;
			
			header("location:reviewer/reviewer_main.html");
		
	}

	mysqli_close($connect);
?>