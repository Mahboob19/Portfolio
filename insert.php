<?php
	$cnn=mysqli_connect("localhost","root","","website");
	$name=$_POST['nme'];
	$email=$_POST['e_mail'];
	$msg=$_POST['message'];
	$sql="INSERT into message(name,email,msg)VALUES('$name','$email','$msg')";
	if(mysqli_query($cnn,$sql))
	header('location:index.php');
?>