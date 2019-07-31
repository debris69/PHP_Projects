<?php
	session_start();
?>
<html>
<head> <h1> <br> <center> Gameboy Spot  </center></h1> </head>
<br><hr> <br> <br>
<body background='background.jpg'> <h2>
<?php
	$monitor=$_POST['monitor'];
	$mouse=$_POST['mouse'];
	$keyboard=$_POST['keyboard'];
	$mousepad=$_POST['mousepad'];
	$graphics=$_POST['graphics'];
	$cpu=$_POST['cpu'];
	
	if($monitor!=0)
	{
		$_SESSION['monitor']=$_SESSION['monitor']+$monitor;
	}
	if($mouse!=0)
	{
		$_SESSION['mouse']=$_SESSION['mouse']+$mouse;
	}
	if($keyboard!=0)
	{
		$_SESSION['keyboard']=$_SESSION['keyboard']+$keyboard;
	}
	if($mousepad!=0)
	{
		$_SESSION['mousepad']=$_SESSION['mousepad']+$mousepad;
	}
	if($graphics!=0)
	{
		$_SESSION['graphics']=$_SESSION['graphics']+$graphics;
	}
	if($cpu!=0)
	{
		$_SESSION['cpu']=$_SESSION['cpu']+$cpu;
	}
?>
<center>
<br> 
Items added to Cart Successfully!!!<br>
<br><br>
<hr><br><br>

<a href='cart.php'> View Cart </a> </br>
</body></center></h2></html>
	