<html> 
<head><br><br> <h1> <center> Registration Procedure </center> </h1> </head>
<br><br><hr> <br><br><br><br><br><br>

<center> <h2><body background='1.png'>

<?php
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$password=md5($pass);
	$mysql=mysqli_connect('localhost','root','','login');
	if(mysqli_connect_errno())
		echo "Connection Failed!! ".mysqli_connect_error()."</br>";
	else
		echo "Connection Successfull!!!"."</br>";
	
	$sql="insert into admin values ('{$user}','{$password}')";
	
	if($mysql->query($sql)==TRUE)
		echo "Successfully Registered Admin"."</br>";
	else
		echo "Registration Failed!!!!".mysqli_error()."</br>";
?>

<br> <br> <br> <hr> <br> <br> <br> 
<a href='insert.html'>Register Another User </a> <br> <br> 
<a href='login.html'> Login with New Id </a> <br>
</center> </h2> </body>
</html>