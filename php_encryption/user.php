<html> 
<head><br><br> <h1> <center> WELCOME </center> </h1> </head>
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
	
	$sql="select * from admin where Username='{$user}'";
	$result=$mysql->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row= $result->fetch_assoc())
		{
			if($row['Password']==$password)
			{
				echo "Welcome ".$row['Username'];
			}
			else
				echo "Incorrect Password!!!";
		}
	}
	else
		echo "User not registered!!!"."</br>"."Please contact Administration!!!";
?>

<br><br><br>
<a href='home.html'> Back to Homepage </a> <br> <br>
</center> </body> </html>
