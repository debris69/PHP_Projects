<?php
	session_start();
?>
<html>
<head> <h1> <br> <center> Gameboy Spot  </center></h1> </head>
<br><hr> <br> <br> <center>
<body background='background.jpg'> <h2>
<?php
	$price_monitor=45000;
	$price_mouse=7000;
	$price_keyboard=9000;
	$price_graphics=35000;
	$price_cpu=9000;
	$price_mousepad=1500;
	
	$total_monitor=$price_monitor * $_SESSION['monitor'];
	$total_mouse=$price_mouse * $_SESSION['mouse'];
	$total_keyboard=$price_keyboard * $_SESSION['keyboard'];
	$total_graphics=$price_graphics * $_SESSION['graphics'];
	$total_cpu=$price_cpu * $_SESSION['cpu'];
	$total_mousepad=$price_mousepad * $_SESSION['mousepad'];
	
	$total_qty= $_SESSION['monitor'] + $_SESSION['mouse'] + $_SESSION['keyboard'] + $_SESSION['graphics'] + $_SESSION['cpu'] + $_SESSION['mousepad'];
	$total_price= $total_monitor + $total_mouse + $total_keyboard + $total_graphics + $total_cpu + $total_mousepad;
	
	echo "<table cellpadding='10'>";
	echo "<tr> <th>Product Name</th> <th>Quantity</th> <th>Price</th> <th>Total (₹)</th> </tr>";
	
	if($_SESSION['monitor']!=0)
		echo "<tr> <td>Samasung Curved QLED Gaming Monitor</td> <td>{$_SESSION['monitor']}</td> <td>{$price_monitor}</td> <td>{$total_monitor}</td> </tr>";
	
	if($_SESSION['mouse']!=0)
		echo "<tr> <td>Logitech G Pro Gaming Mouse</td> <td>{$_SESSION['mouse']}</td> <td>{$price_mouse}</td> <td>{$total_mouse}</td> </tr>";
	
	if($_SESSION['keyboard']!=0)
		echo "<tr> <td>Razer Pro Gaming Keyboard</td> <td>{$_SESSION['keyboard']}</td> <td>{$price_keyboard}</td> <td>{$total_keyboard}</td> </tr>";
	
	if($_SESSION['graphics']!=0)
		echo "<tr> <td>Aaorus Nvidia GeForce GTX 1080Ti</td> <td>{$_SESSION['graphics']}</td> <td>{$price_graphics}</td> <td>{$total_graphics}</td> </tr>";
	
	if($_SESSION['cpu']!=0)
		echo "<tr> <td>Gaming CPU Case by MiXi</td> <td>{$_SESSION['cpu']}</td> <td>{$price_cpu}</td> <td>{$total_cpu}</td> </tr>";
	
	if($_SESSION['mousepad']!=0)
		echo "<tr> <td>Razer Pro Gaming Keyboard</td> <td>{$_SESSION['mousepad']}</td> <td>{$price_mousepad}</td> <td>{$total_mousepad}</td> </tr>";
	
	echo "<tr>  <td>Total</td> <td>{$total_qty}</td> <td>-</td> <td>{$total_price}</td> </tr>";
	echo "</table>";
?>
<br>
<br>
<br>
Sorry, You Cannot Checkout at the moment!!! :( 
</center> </body> </h2> </html>

