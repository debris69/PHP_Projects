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
		
		$sql="select * from student where Enrollment='{$enroll}'";
		$result=$mysql->query($sql);
		if($result->num_rows > 0)
		{
			echo "<table cellpadding='10' ><tr><th>Enrollment Number</th><th>Name</th><th>Course</th><th>Semester</th><th>Department</th></tr>";
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>".$row["Enrollment"]."</td><td>".$row["Name"]."</td><td>".$row["Course"]."</td><td>".$row["Semester"]."</td><td>".$row["Department"]."</td></tr>";
			}
			echo "</table>";
		}
		else
			echo " 0 results "."</br>";
	}
	else
		echo " Can't Display without Enrollment Number!!! Try Again "."</br>";
?>

<br>
<br>
<br>
<br>
<hr>
<br>
<br>
<a href='query.html'>View Another </a> <br> <br>
<a href='home.html'> Home </a>
</html> </center>