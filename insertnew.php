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
//if(isset($_GET['type'])){
    $date = $_GET['Date'];
    $time = $_GET['TIME'];
    $nh3level = $_GET['ammonialevel'];
    $o2level = $_GET['oxygenlevel'];
    $waterlevel = $_GET['waterlevel'];
    $location = $_GET['location'];
    echo "$date $time $nh3level $o2level  $waterlevel  $location";
    $sql = "INSERT INTO sensordatatable (timestamp, timecurrent, AmmoniaLevel,OxygenLevel, WaterLevel, Location) VALUES ($date, $time, $nh3level, $o2level  ,  $waterlevel  ,  $location)";
    if ($conn->query($sql) === TRUE) {
        echo "You have been registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
//}
?>
