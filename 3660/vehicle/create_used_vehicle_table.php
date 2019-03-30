<?php
function create_used_vehicle_table(){
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
$sql = "CREATE TABLE Used_Vehicle (
    vin varchar(20),
    current_kilometers int,
    bought_from varchar(20),
    purchase_location varchar(20),
    price_paid numeric(9,2),
    book_price numeric(9,2),
    primary key(vin),
    foreign key(vin) references Vehicle(vin))
";

if ($conn->query($sql) === TRUE) {
    echo "Vehicle Table created successfully"."<br>";
} else {
    echo "Error creating table: " . $conn->error."<br>";
}

$conn->close();
}
?>