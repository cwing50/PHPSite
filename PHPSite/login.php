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
/*function getPost( $name )
{
	if ( isset($_POST[$name]) )
	{
		return htmlspecialchars($_POST[$name]);
	}
	return "";
}*/
session_start();
$conn = getConn();

if ( isset($_POST["submit"]) )
{
	$row = lookupUsername($conn, getPost('username'));
	if ($row == 0)
	{
	echo "Invalid USERNAME or password";
	}
	else if ( password_verify($_POST["password"], $row['encrypted_password'] ))
	{
	$_SESSION["user"] = getPost("username");
	$_SESSION["group"] = $row['usergroup'];
	header("Location: main.php");
	}
	else
	{
	echo "Invalid username or PASSWORD";
	}
}

?>
</head>

<body>
<?php heading(); ?>
<h2>Please enter the username and password below.</h2>
<h3>***DO NOT ENTER YOUR REAL USERNAME OR PASSWORD***</h3>
<form method='POST'>
Username: <input type='text' name='username' value='<?php echo getPost("siteusername");?>'> <br/>
Password: <input type='password' name='password' value='<?php echo getPost("sitepassword");?>'> <br/>
<input type='submit' name='submit' value='Login'>
<br />
<br />
<a href='createuser.php'>Create New User</a>
</form>


</body>
</html>
