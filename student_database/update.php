<html>
<center> <br> <br> <br> <br> <br> <h3>
<body background='abstract.png'>
<?php
	$enroll=$_POST['enroll'];
	$update=$_POST['update'];
	$value=$_POST['value'];
	
	if($enroll!=NULL)
	{
		$mysql=mysqli_connect('localhost','root','','university');
		if(mysqli_connect_errno())
			echo " Connection Failed!!! ".mysqli_connect_error()."</br>";
		else
			echo " Connection Successfull!!! "."</br>";
	
		$sql="update student set {$update}='{$value}' where Enrollment='{$enroll}'";
	
		if($mysql->query($sql)==TRUE)
			echo " Updation Successfull!!!! "."</br>";
		else
			echo " Updation Failed!!!! ".mysqli_error()."</br>";
	}
	else
		echo " Can't Update without Enrollment Number!!! Try Again "."</br>";
?>

<br>
<br>
<br>
<br>
<hr>
<br>
<br>
<a href='update.html'> Update Another </a> <br> <br>
<a href='home.html'> Home </a>
</html> </center>