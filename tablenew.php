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
//echo "Connected successfully";
//echo"Yes";
echo "<title>.::Smart Sewage System::.</title>";
echo "<body style='background-color:pink'>";
$sql = "SELECT * FROM newsensordatatable";
    $result = mysqli_query($conn ,$sql);
    $array = [];
    echo "<table><tr><th>Date</th><th>||</th><th>Time</th><th>||</th><th>Ammonia Level</th><th>||</th><th>Oxygen Level</th><th>||</th><th>Water Level</th><th>||</th><th>Location</th></tr> ";
    while($row = $result->fetch_assoc()){
       echo "<tr><td>$row[timestamp] </td> <td>||</td> <td>$row[timecurrent]</td> <td>||</td> <td>$row[AmmoniaLevel]</td> <td>||</td> <td>$row[OxygenLevel]</td> <td>||</td> <td>$row[WaterLevel]</td> <td>||</td> <td>$row[Location]</td></tr>";
    }
    echo "</table>";
    
    //header('Content-Type:Application/json');
    //echo json_encode($array);
   // mysqli_free_result($result);
//Getting all data from server
?>
