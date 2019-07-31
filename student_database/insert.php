<html>
<center> <br> <br> <br> <br> <br> <h3>
<body background='abstract.png'>
<?php

	$name=$_POST['name'];
	$enroll=$_POST['enroll'];
	$course=$_POST['course'];
	$sem=$_POST['sem'];
	$dep=$_POST['dept'];
	if($enroll!=NULL){
	$mysql=mysqli_connect('localhost','root','','university');
	if(mysqli_connect_errno())
		echo " Connection Failed!!! ".mysqli_connect_error()."</br>";
	else
		echo " Connection Successfull!!! "."</br>";
	
	$sql="insert into student values('{$enroll}','{$name}','{$course}','{$sem}','{$dep}')";
	
	if($mysql->query($sql)==TRUE)
		echo " Insertion Successfull!!!! "."</br>";
	else
		echo " Insertion Failed!!!! ".mysqli_error()."</br>";
	}
	else
		echo " Can't Insert without Enrollment Number!!! Try Again "."</br>";
?>

<br>
<br>
<br>
<br>
<hr>
<br>
<br>
<a href='insert.html'> Insert Another </a> <br> <br>
<a href='home.html'> Home </a>
</html> </center>