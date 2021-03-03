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

// functions

startup();
unset($_SESSION['user']);

header("refresh:5;url= login.php");
?>
</head>

<body>
<?php heading(); ?>
<h1>See you later!</h1>
</body>
</html>
