<?php
	
	
	$mysql=mysqli_connect('localhost','root','','university');
	if(mysqli_connect_errno())
		echo " Connection Failed!!! ".mysqli_connect_error()."</br>";
	else
		echo " Connection Successfull!!! "."</br>";
	
	$sql="CREATE TABLE student(
	Enrollment varchar(20) PRIMARY KEY,
	Name varchar(30),
	Course varchar(15),
	Semester varchar(1),
	Department varchar(20)
	)";
	
	if($mysql->query($sql)==TRUE)
		echo " Creation successfull!!!! "."</br>";
	else
		echo " Creation Failed!!!! ".mysqli_error()."</br>";
?>
