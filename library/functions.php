<?php
//functions
if ( isset($_POST["logout"]) )
{
	header("Location: logout.php");
}

function footer()
{
	echo "<form method='POST'>";
	echo "<input type='submit' name='logout' value='Logout'>";
	echo "</form>";
}

function heading()
{
echo "<p>Caden Wingler</p>";
echo "<p>CSC-155-051DV_2021SP</p>";
echo "<img src='library/avatar.jpg' height=100 width=100/>";
}

?>
