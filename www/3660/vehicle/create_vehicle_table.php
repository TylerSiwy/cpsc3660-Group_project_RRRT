<?php
function create_vehicle_table(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dealership";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error."<br>");
} 

// sql to create table
$sql = "CREATE TABLE Vehicle (
    vin char(17),
    year int, /* year datatype*/
    model varchar(20),
    edition char(2),
    km int,
    interior_color varchar(20),
    exterior_color varchar(20),
    purchase_date date, /*date datatype*/
    primary key(vin))
";

if ($conn->query($sql) === TRUE) {
    echo "Vehicle Table created successfully"."<br>";
} else {
    echo "Error creating table: " . $conn->error."<br>";
}

$conn->close();
}
?>