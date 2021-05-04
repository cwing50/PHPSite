<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>View Orders</title>
<?php
// library
require("library/functions.php");

// functions
startup();

function printData($conn)
{
	$sql = "SELECT * FROM orders; ";
	$result = $conn->query($sql);
	$rowcount = 0;
	if ($result->num_rows > 0) {
	echo "<table cellspacing='0'>";

	echo "<tr>";
		echo "<th>Order Number</th>";
		echo "<th>User</th>";
		echo "<th>Mustangs</th>";
		echo "<th>Camaros</th>";
		echo "<th>Challengers</th>";
		echo "<th>Chargers</th>";
	echo "</tr>";

	while($row = $result->fetch_assoc()) {
		$rowcount++;
		if ($rowcount % 2 == 0)
		echo "<tr bgcolor='white'>";
		else
		echo "<tr bgcolor='lightgray'>";
	
			echo "<td>" . $row["id"]. "</td>";
			echo "<td>" . $row["user"]. "</td>";
			echo "<td>" . $row["mustangs"]. "</td>";
			echo "<td>" . $row["camaros"]. "</td>";
			echo "<td>" . $row["challengers"]. "</td>";
			echo "<td>" . $row["chargers"]. "</td>";
		echo "</tr>";
	}
	echo "</table>";
	} else {
	echo "No results found";
	}
}

$user = "cwingler4";
$conn = mysqli_connect("localhost",$user,$user,$user);

if (mysqli_connect_errno()) {
	echo "<p>Failed to connect</p>";
}
?>

</head>

<body>
<?php heading(); ?>
<h1>View Orders</h1>
<table align='center'><tr><td><?php printData($conn); ?></td></tr></table>
<?php footer(); ?>
</body>
</html>
