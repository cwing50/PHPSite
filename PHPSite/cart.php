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

$conn = getConn();


$formerror = "&nbsp;";

if (isset ($_POST["submit"]))
{
	if ($_POST['mustang'] == 0 && $_POST['camaro'] == 0 && $_POST['challenger'] == 0 && $_POST['charger'] == 0)
	{
		$formerror = 'Must have one item in cart to place order';
	} else
	{
		$stmt = $conn->prepare("INSERT INTO orders (user, mustangs, camaros, challengers, chargers) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("siiii", $user, $mustang, $camaro, $challenger, $charger);		

		$user = getPost('user');
		$mustang = getPost('mustang');
		$camaro = getPost('camaro');
		$challenger = getPost('challenger');
		$charger = getPost('charger');
	
		$stmt->execute();
		header("Location: main.php");
	}
}
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

<form method='POST'>
<input type='hidden' name='user' value='<?php echo $_SESSION["user"]; ?>'>
<input type='hidden' name='mustang' value='<?php echo mustang(); ?>'>
<input type='hidden' name='camaro' value='<?php echo camaro(); ?>'>
<input type='hidden' name='challenger' value='<?php echo challenger(); ?>'>
<input type='hidden' name='charger' value='<?php echo charger(); ?>'>
<input type='submit' name='submit' value='Place Order'>
</form>
<?php echo $formerror; ?>
<?php footer(); ?>
</body>
</html>
