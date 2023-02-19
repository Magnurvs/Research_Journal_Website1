<?php

$connect=mysqli_connect("localhost","root","","journal") or die("connection Failed");



$p=$_REQUEST['id'];//Reviwer Id 
$auth_id=$_REQUEST['auth_id'];//Reviwer Id 
$status="false";

$query="insert into `configration_reviwer_tbl`values(0,".$auth_id.",".$p.",".$status.")";

mysqli_query($connect,$query) or die("Query Failed");




/*
$query= "insert into signup(fname)values(".$p.")";



mysqli_query($connect,$query) or die("Query Failed");*/




?>