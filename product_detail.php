<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Online Store</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
<body>
	<div class='container'>
		<div id='main' class='sixteen columns'>

<?php
	require( "dbconnect.php" );
	$id  = $_GET['cat_id'];
	$sql = "SELECT * FROM productTable WHERE id='$id'";
	$result = mysql_query( $sql );
	$myrow  = mysql_fetch_array( $result );
	$image_lg  = $myrow['image_lg'];
	$name      = $myrow['name'];
	$price     = $myrow['price'];
	$desc_long = $myrow['desc_long'];
	
	echo "<div class='item'>
	<img src='images/$image_lg' />
	<p>Name:$name Price:$price</p>
	<p>$desc_long</p>
</div> \n";
?>

		</div>
		
		<div id='nav_bar' class='sixteen columns'>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='show_catalog.php'>Catalog</a></li>
				<li><a href='about.php'>About Us</a></li>
			</ul>
		</div>
	</div>
	</div>
</body>
</html>

