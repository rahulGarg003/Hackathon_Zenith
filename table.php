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
//echo "<style type = "text/css">body{margin:0;background-color("green");background-size:cover}</style>";
$sql = "SELECT * FROM sensordatatable";
    $result = mysqli_query($conn ,$sql);
    $array = [];
    echo "<table><tr><th>Date</th><th>Ammonia Level</th><th>Oxygen Level</th><th>Water Level</th><th>Location</th></tr> ";
    while($row = $result->fetch_assoc()){
       echo "<tr><td>$row[timestamp] </td> <td>$row[ammonialevel]</td> <td>$row[oxygenlevel]</td> <td>$row[waterlevel]</td> <td>$row[location]</td></tr>";
    }
    echo "</table>";
    
    //header('Content-Type:Application/json');
    //echo json_encode($array);
   // mysqli_free_result($result);
//Getting all data from server
?>
