<?php
	$mysql=mysqli_connect('localhost','root','','login');
	
	if(mysqli_connect_errno())
		echo "Connection Failed!!".mysqli_connect_error()."</br>";
	else
		echo "Connection Successfull!!";
	
	$sql="CREATE TABLE admin(
	Username varchar(20) primary key,
	Password varchar(100) not null )";
	
	if($mysql->query($sql)==TRUE)
		echo "ADMIN Table Created!!!";
	else
		echo "Table Creation Failed!!".mysqli_error();
?>
