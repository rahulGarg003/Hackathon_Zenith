<?php
//Login details
$servername = "mssql6.gear.host";
$username = "sensordata2017";
$password = "Io98?ai29KM!";
$dbname = "sensordata2017";
//Create connection
$conn = new mysqli("$servername", $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//Create table query
$sql = "CREATE TABLE sensortable(timestamp Varchar(20),AmmoniaLevel Varchar(10),OxygenLevel Varchar(10),WaterLevel Varchar(8), Location Varchar(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table blogs created successfully!";} 
else {
    echo "Error creating table: " . $conn->error;
}
?>
