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
		$_SESSION['challenger']++;
	}
	else if ($_POST['submit'] == 'Remove One from Cart')
	{
		if ($_SESSION['challenger'] > 0)
		{
			$_SESSION['challenger']--;
		}
	}
	else if ($_POST['submit'] == 'Remove All from Cart')
	{
		$_SESSION['challenger'] = 0; 
	}
}
else
{
	if (!isset($_SESSION['challenger']))
	{
	$_SESSION['challenger'] = 0;
	}
}
?>
</head>

<body>
<?php heading(); ?>
<h1>2020 Dodge Challenger SRT Hellcat</h1>
<h3>Specs:</h3>
<p>717HP, 656 lb.ft torque</p>
<p>MSRP: $58,995</p>
<img src='library/challenger.jpg'/>
<form method='POST'>
<input type='submit' name='submit' value='Purchase One'>
<input type='submit' name='submit' value='Remove One from Cart'>
<input type='submit' name='submit' value='Remove All from Cart'>
</form>

<p> You have <?php echo $_SESSION['challenger'] ?> Challenger's in your cart! </p>

<?php footer(); ?>

</body>
</html>
