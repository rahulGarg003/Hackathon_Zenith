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
echo"Yes";
$sql = "SELECT * FROM sensordatatable";
    $result = mysqli_query($conn ,$sql);
    $array = [];
    
    while($row = $result->fetch_assoc()){
        $array[] = $row;
    }
    
    header('Content-Type:Application/json');
    echo json_encode($array);
    mysqli_free_result($result);
//Getting all data from server
?>
