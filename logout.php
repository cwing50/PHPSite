<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>Logout</title>
<?php
// library
require("library/functions.php");

if ( isset($_POST["back"]) )
{
	header("Location: login.php");
}
// functions
?>
</head>

<body>
<?php heading(); ?>
<h1>See you later!</h1>
<form method='POST'>
<input type='submit' name='back' value='Back to Login'>
</form>
</body>
</html>
