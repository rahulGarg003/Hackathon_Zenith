<?php
echo "Hello";
//Login details
$servername = "mssql6.gear.host";
$username = "hackathonzenith";
$password = "Kk40W_!tH4D6";
$dbname = "hackathonzenith";
//Create connection
$conn = new mysqli("$servername", $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
//Create table query
$sql = "CREATE TABLE sensorst (timestamp Varchar(20),AmmoniaLevel Varchar(10),OxygenLevel Varchar(10),WaterLevel Varchar(8), Location Varchar(50))";
if ($conn->query($sql) === TRUE) {
    echo "Table blogs created successfully!";} 
else {
    echo "Error creating table: " . $conn->error;
}
?>
