<html>
<head>
<title>Create User</title>
<?php

require("library/functions.php");
$conn = getConn();

$formerror = "&nbsp;";
lookupUsername($conn, "test");

if (isset ($_POST["submit"]))
{
	if ($_POST["submit"] == "Create New User")
	{
	if (empty($_POST['username']))
	{
		$formerror = 'Username is Required';
	}
	else if (empty($_POST['password']))
	{
		$formerror = 'Password is Required';
	}
	else if ( $_POST['password'] != $_POST['passwordconfirmed'])
	{
		$formerror = 'Passwords do not Match';
	}
	else if ( lookupUsername($conn, $_POST['username']) != 0 )
	{
		$formerror = 'Username already exists';
	}
	else {
		$stmt = $conn->prepare("INSERT INTO user (username, encrypted_password, email, usergroup) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $username, $encrypted_password, $email, $usergroup);
	$username = getPost('username');
	$encrypted_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$email = getPost('email');
	$usergroup = getPost('usergroup');
	
	$stmt->execute();
	header("Location: login.php");
	}
	}
	else
	{
	header("Location: login.php");
	}
}

?>
</head>
<body>
<table align='center'>
<form method='POST'>
<tr><td colspan='2' align='center'>DON'T ENTER REAL PASSWORDS!</td></tr>
<tr><td align='right'>New Username:</td>
	<td><input type='text' name='username' value='<?php echo getPost("username"); ?>'></td>
</tr>
<tr><td align='right'>New Password:</td><td><input type='password' name='password' value='<?php echo getPost("password"); ?>'></td></tr>
<tr><td align='right'>Confirm Password:</td><td><input type='password' name='passwordconfirmed' value='<?php echo getPost("passwordconfirmed"); ?>'></td></tr>
<tr><td align='right'>Email:</td><td><input type='text' name='email' value='<?php echo getPost("email"); ?>'></td></tr>
<tr><td align='right'>User Group:</td><td><select name='usergroup'>
<option>User</option>
<option>Admin</option>
</select>
</td></tr>
<tr><td colspan='2' align='center'><?php echo $formerror;?></td></tr>
<tr><td colspan='2' align='center'>
<input type='submit' name='submit' value='Create New User'>
<input type='submit' name='submit' value='Cancel'>
</td></tr>
</form>

</body>
</html>
