<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>Purchase1</title>
<?php
// library
require("library/functions.php");

// functions
startup();


if (isset($_POST['submit'])) {
	if ($_POST['submit'] == 'Purchase One')
	{
		$_SESSION['mustang']++;
	}
	else if ($_POST['submit'] == 'Remove One from Cart')
	{
		if ($_SESSION['mustang'] > 0)
		{
			$_SESSION['mustang']--;
		}
	}
	else if ($_POST['submit'] == 'Remove All from Cart')
	{
		$_SESSION['mustang'] = 0; 
	}
}
else
{
	if (!isset($_SESSION['mustang']))
	{
	$_SESSION['mustang'] = 0;
	}
}
?>
</head>

<body>
<?php heading(); ?>
<h1>2020 Ford Mustang Shelby GT500</h1>
<h3>Specs:</h3>
<p>760HP and 625 lb.ft torque</p>
<p>MSRP: $73,995</p>
<img src='library/images/mustang.jpg'/>
<form method='POST'>
<input type='submit' name='submit' value='Purchase One'>
<input type='submit' name='submit' value='Remove One from Cart'>
<input type='submit' name='submit' value='Remove All from Cart'>
</form>

<p> You have <?php echo $_SESSION['mustang'] ?> Mustang's in your cart! </p>

<?php footer(); ?>

</body>
</html>
