<html>
<center> <br> <br> <br> <br> <br> 
<body background='abstract.png'><h3>
<?php
	$enroll=$_POST['enroll'];
	
	if($enroll!=NULL)
	{
		$mysql=mysqli_connect('localhost','root','','university');
		if(mysqli_connect_errno())
			echo " Connection Failed!!! ".mysqli_connect_error()."</br>";
		else
			echo " Connection Successfull!!! "."</br>";
	
		$sql="delete from student where Enrollment='{$enroll}'";
	
		if($mysql->query($sql)==TRUE)
			echo " Deletion Successfull!!!! "."</br>";
		else
			echo " Deletion Failed!!!! ".mysqli_error()."</br>";
	}
	else
		echo " Can't Delete without Enrollment Number!!! Try Again "."</br>";
?>

<br>
<br>
<br>
<br>
<hr>
<br>
<br>
<a href='delete.html'>Delete Another </a> <br> <br>
<a href='home.html'> Home </a>
</html> </center>