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
function getPost( $name )
{
	if ( isset($_POST[$name]) )
	{
		return htmlspecialchars($_POST[$name]);
	}
	return "";
}

if ( isset($_POST["submit"]) )
{
	if ( $_POST["siteusername"] == "username" && $_POST["sitepassword"] == "password" )
	{
		header("Location: main.php");
	}
	else
	{
		echo "Incorrect username or password";
	}
}

?>
</head>

<body>
<?php heading(); ?>
<h2>Please enter the username and password below.</h2>
<h3>***DO NOT ENTER YOUR REAL USERNAME OR PASSWORD***</h3>
<form method='POST'>
Username: <input type='text' name='siteusername' value='<?php echo getPost("siteusername");?>'> <br/>
Password: <input type='password' name='sitepassword' value='<?php echo getPost("sitepassword");?>'> <br/>
<input type='submit' name='submit' value='Login'>
<p> USERNAME = 'username' PASSWORD = 'password' </p>

</form>


</body>
</html>
