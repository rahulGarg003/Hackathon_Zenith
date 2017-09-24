<?php
//Login details
$servername = "mysql5.gear.host";
$username = "sensordata2017";
$password = "Mc090LF!0e~2";
$dbname = "sensordata2017";
//Create connection
$conn = new mysqli("$servername", $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//Create table query
$sql = "CREATE TABLE sensordatatable(timestamp Varchar(20),AmmoniaLevel Varchar(20),OxygenLevel Varchar(20),WaterLevel Varchar(8), Location Varchar(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table blogs created successfully!";} 
else {
    echo "Error creating table: " . $conn->error;
}
?>
