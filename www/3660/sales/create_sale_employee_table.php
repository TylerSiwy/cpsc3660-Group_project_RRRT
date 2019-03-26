<?php
function create_sale_employee_table(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dealership";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE   Sale_Employee (
    eid char(5),
    sid char(5),
    primary key(sid),
    foreign key(eid) references Employee(eid),
    foreign key(sid) references Sale(sid))
";

if ($con->query($sql) === TRUE) {
    echo "Sale Employee Table created successfully"."<br>";
} else {
    echo "Error creating table: " . $con->error."<br>";
}

$con->close();
}
?>