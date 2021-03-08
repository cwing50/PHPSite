<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>Cart</title>
<?php
// library
require("library/functions.php");

// functions
startup();
?>
</head>

<body>
<?php heading(); ?>
<h1>Shopping Cart</h1>
<p>Mustang: <?php echo $_SESSION['mustang'];?></p>
<p>Camaro: <?php echo $_SESSION['camaro'];?></p>
<p>Challenger: <?php echo $_SESSION['challenger'];?></p>
<p>Charger: <?php echo $_SESSION['charger'];?></p>
<?php footer(); ?>
</body>
</html>
