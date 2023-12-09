<?php


$id=$_GET['id'];

include '../dbconnect.php';
$sql="UPDATE `tbl_login` SET user_status = '2' WHERE username = '$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert(' Rejected!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>