<?php
//functions
function printcookiename()
{
	if ( isset($_COOKIE['personname']))
	{
		echo "<h3>Welcome $_COOKIE[personname]!</h3>";
	}
}



if ( isset($_POST["logout"]) )
{
	header("Location: logout.php");
}
if ( isset($_POST["main"]) )
{
	header("Location: main.php");
}
if ( isset($_POST["item1"]) )
{
	header("Location: purchase1.php");
}
if ( isset($_POST["item2"]) )
{
	header("Location: purchase2.php");
}
if ( isset($_POST["item3"]) )
{
	header("Location: purchase3.php");
}
if ( isset($_POST["item4"]) )
{
	header("Location: purchase4.php");
}
if ( isset($_POST["cart"]) )
{
	header("Location: cart.php");
}
if ( isset($_POST["viewusers"]) )
{
	header("Location: viewusers.php");
}
if ( isset($_POST["vieworders"]) )
{	
	header("Location: vieworders.php");
}


function footer()
{
	echo "<form method='POST'>";
	echo "<input type='submit' name='logout' value='Logout'>";
	echo "<input type='submit' name='main' value='Main'>";
	echo "  <b>Cars:</b>  ";
	echo "<input type='submit' name='item1' value='2020 Mustang GT500'>";
	echo "<input type='submit' name='item2' value='2020 Camaro ZL1'>";
	echo "<input type='submit' name='item3' value='2020 Dodge Challenger Hellcat'>";
	echo "<input type='submit' name='item4' value='2020 Dodge Charger Hellcat'>";
	echo "    ";
	echo "<input type='submit' name='cart' value='Cart'>";
	echo "<br />";
	if ($_SESSION['group'] == 'Admin')
	{
	echo "<input type='submit' name='viewusers' value='View Users'>";
	echo "<input type='submit' name='vieworders' value='View Orders'>";	
	}
	echo "</form>";
}

function heading()
{
echo "<p>Caden Wingler</p>";
echo "<p>CSC-155-051DV_2021SP</p>";
echo "<img src='library/images/avatar.jpg' height=100 width=100/>";
printcookiename();
}

function startup()
{
	session_start();
	
	if ( !isset( $_SESSION['user'] ) )
	{
	header("Location: login.php");
	}
}

function getPost( $name )
{
	if ( isset($_POST[$name]) )
	{
		return htmlspecialchars($_POST[$name]);
	}
	return "";
}

function getSession( $name )
{	
	if ( isset($_SESSION[$name]) )
	{
		return $_SESSION[$name];
	}
	return "";
}

function getConn()
{
	$user = "cwingler4";
	$conn = mysqli_connect("localhost",$user,$user,$user);
	if (mysqli_connect_errno()) {
	echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
	}
	return $conn;
}

function lookupUsername($conn, $username)
{
	$stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
	$stmt->bind_param("s", $username);
	
	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	if ($num_rows == 0)
	{
	return 0;
	}
	else if ($num_rows > 1)
	{
	header("Location: goodbye.php");
	}
	else
	{
	return $result->fetch_assoc();
	}
}	
?>
