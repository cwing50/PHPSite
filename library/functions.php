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

?>
