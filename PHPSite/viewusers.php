<!-- I honor Parkland's core values by affirming that I have followed all
academic integrity guidelines for this work.
Caden Wingler
CSC-155-051DV_2021SP -->
<html>
<head>
<title>View Users</title>
<?php
// library
require("library/functions.php");

// functions
startup();
$conn = getConn();

function showData($conn)
{
	$sql = "SELECT * from user WHERE deleted_on is NULL; ";
	$result = $conn->query($sql);
	$rowcount = 0;
	if ($result->num_rows > 0) {
	echo "<table cellspacing='0'>";
	
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>User</th>";
		echo "<th>Password (Encrypted)</th>";
		echo "<th>Usergroup</th>";
		echo "<th>Email</th>";
	echo "</tr>";

	while($row = $result->fetch_assoc()) {
		$rowcount++;
		if ($rowcount % 2 == 0)
		echo "<tr bgcolor='white'>";
		else
		echo "<tr bgcolor='lightgray'>";
		
			echo "<td>" . $row["id"] . "</td>";
			echo "<td>" . $row["username"] . "</td>";
			echo "<td>" . $row["encrypted_password"] . "</td>";
			echo "<td>" . $row["usergroup"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	}
	else {
	echo "0 results";
	}
}

?>
</head>

<body>
<?php heading(); ?>
<h1>View Users</h1>
	<table align='center' style="width:50%"><tr><td><?php showData($conn); ?></td></tr></table>
<?php footer(); ?>
</body>
</html>
