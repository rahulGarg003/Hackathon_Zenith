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
$sql = "CREATE TABLE newsensordatatable(timestamp Varchar(20),timecurrent Varcher(20),AmmoniaLevel Varchar(15),OxygenLevel Varchar(15),WaterLevel Varchar(15), Location Varchar(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table blogs created successfully!";} 
else {
    echo "Error creating table: " . $conn->error;
}
?>
