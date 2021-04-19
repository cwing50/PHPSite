<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>Cart</title>
<?php
// library
require("library/functions.php");

// functions
function mustang() {
	if(isset($_SESSION['mustang'])) {
		echo $_SESSION['mustang'];
	}
	else
		echo "0";
}
function camaro() {
	if(isset($_SESSION['camaro'])) {
		echo $_SESSION['camaro'];
	}
	else
		echo "0";
}
function challenger() {
	if(isset($_SESSION['challenger'])) {
		echo $_SESSION['challenger'];
	}
	else
		echo "0";
}
function charger() {
	if(isset($_SESSION['charger'])) {
		echo $_SESSION['charger'];
	}
	else
		echo "0";
}
startup();

?>
</head>

<body>
<?php heading(); ?>
<h1>Shopping Cart</h1>
<p>Mustang: <?php mustang();?></p>
<p>Camaro: <?php camaro();?></p>
<p>Challenger: <?php challenger();?></p>
<p>Charger: <?php charger();?></p>
<?php footer(); ?>
</body>
</html>
