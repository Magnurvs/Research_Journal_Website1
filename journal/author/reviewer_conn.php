<?php 
    $connect = mysqli_connect("localhost","root","","journal") or die("Connection Failed ");

    $auth_id=$_REQUEST['auth_id'];
    $rev_id=$_REQUEST['revi_id'];

    $msg=$_REQUEST['message'];

     


    $query = "INSERT INTO `feedback_tbl` ( `reviewer_id`, `author_id`, `massage`) VALUES (".$auth_id.",".$rev_id.",".$msg.");";

    mysqli_query($connect,$query) or die("Query Failed");
    

?>