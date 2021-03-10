<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>Login</title>
<?php
// library
require("library/functions.php");

// functions
startup();

if ( isset($_POST["set"]) )
{
	setcookie("personname",$_POST['name'], time() + (86400 * 30));
	header("Refresh:0");
}
?>
</head>

<body>
<?php heading(); ?>
<h1>Main Page</h1>
<form method='POST'>
What shall we call you name wise?: <input type='text' name='name'
value=''><input type='submit' name='set' value='Set'>
</form>
<?php footer(); ?>
</body>
</html>
