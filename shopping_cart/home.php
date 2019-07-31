<?php
	session_start();
	$_SESSION['monitor']=0;
	$_SESSION['cpu']=0;
	$_SESSION['mouse']=0;
	$_SESSION['mousepad']=0;
	$_SESSION['keyboard']=0;
	$_SESSION['graphics']=0;
?>
<html>
<head> <h1> <br> <center> Gameboy Spot </center> </h1> </head>
<br><hr> <br> <br>

<body background='background.jpg'> 
<form method='post' action='review.php'>

<img src='monitor.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Samasung Curved QLED Gaming Monitor </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 45,000 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='monitor'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>

<img src='mouse.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Logitech G Pro Gaming Mouse </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 7,000 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='mouse'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>

<img src='keyboard.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Razer Pro Gaming Keyboard </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 9,000 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='keyboard'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>

<img src='graphics.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Aaorus Nvidia GeForce GTX 1080Ti </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 35,000 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='graphics'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>

<img src='cpu.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Gaming CPU Case by MiXi </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 9,000 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='cpu'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>

<img src='mousepad.jpg' height='190' width='300' align='left'>&nbsp; &nbsp; <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Razer Goliathus Chroma Mousepad </h2> <br>
<h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price: Rs 1,500 &nbsp; &nbsp;&nbsp;&nbsp; Qty: &nbsp;&nbsp; <select name='mousepad'> <option value='0'>0</option><option value='1'>1</option> <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option> </select>
<br></h3><br><br><br>
<hr> <br><br>
<center> <input type='reset' name='reset'> &nbsp; &nbsp; <input type='submit' name='submit'>	
</form>
<br><br> <br> <br><br> <font color='red'><i><h3>Created By Piyush Kumar</h3></i></font>
</body></center>


 