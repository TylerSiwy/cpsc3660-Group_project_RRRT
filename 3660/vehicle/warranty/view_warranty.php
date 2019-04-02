<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "../stylesheet.css"/>
</head>

<body>
	<a href="View_Warranty.html"><button>Back</button></a>
	<br><br><br>
	
	<?php
	include '../credentials.php';
	$servername = getServerName();
	$username = getUserName();
	$password = getPassword();
	$dbname = getdbName();

	// Insertion into Employee
	$con = new mysqli($servername, $username, $password, $dbname);

	if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
	}
	$sql = "SELECT *
	FROM Warranty";

	mysqli_query($con, $sql);
	// // Check if it worked correctly
	// if(mysqli_query($con, $sql)){
	// 	echo "Warranty inserted successfully.<br>";
	// 	} else{
	// 	//echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	// 	}	
	// mysqli_close($con);

	$result = $con->query($sql);

	// Output the results in a table format
	if ($result->num_rows > 0) 
	{ 
		echo "<div class='employee_container'>";
		echo "<div class='item'>";
		echo "Policy Number";
		echo "</div>";
		echo "<div class='item'>";
		echo "VIN";
		echo "</div>";
		echo "<div class='item'>";
		echo "Co-Signer";
		echo "</div>";
		echo "</div></br>";

		echo "<div class='employee_container'>";
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo "<div class='item'>";
			echo $row["policy_number"]." ";
			echo "</div>";

			echo "<div class='item'>";
			echo $row["vin"]." ";
			echo "</div>";

			echo "<div class='item'>";
			echo $row["co_signer"]." ";
			echo "</div>";
		}
		echo "</div>";
	} else 
	{
		echo "0 results";
	}

	mysqli_close($con);

	?>

</body>

</html>