<?php
 if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$p=$_POST["txtf"];
	$q=$_POST["txtm"];
	$r=$_POST["txtl"];
	$s=$_POST["address"];
	$a=$_POST["cnt"];
	$b=$_POST["role"];
	$w=$_POST["txtdob"];
	$c=$_POST["txtpn"];
	$d=$_POST["txtct"];
	$x=$_POST["rdbtn"];
	$y=$_POST["txtmail"];
	$z=$_POST["txtpass1"];
	$myrol=$b;
	echo $myrol;
	
	$connect=mysqli_connect("localhost","root","","journal") or die("connection failed");
	if($b=='reviewer')
	{
		$query1="insert into reviewer  values(0,'".$p."','".$q."','".$r."','".$s."','".$a."','".$w."','".$c."','".$d."','".$x."','".$y."','".$z."')";
		$res1=mysqli_query($connect,$query1);
	    echo "R";
		header("location:singup_success.html");
	}
	elseif($b=='author'){
		$query2="insert into author values(0,'".$p."','".$q."','".$r."','".$s."','".$a."','".$w."','".$c."','".$d."','".$x."','".$y."','".$z."')";
		$res2=mysqli_query($connect,$query2);
		echo "A";
		header("location:singup_success.html");
	}
	elseif($b=='admin'){
		$query3="insert into signup  values(0,'".$p."','".$q."','".$r."','".$s."','".$a."','".$w."','".$c."','".$d."','".$x."','".$y."','".$z."')";
		$res3=mysqli_query($connect,$query3);
		echo "AD";
		header("location:singup_success.html");
	}
	else{
		echo "<script>alert(' Not Registered Successfully');</script>"; 
	}
	
	mysqli_close($connect);
}
	
?>