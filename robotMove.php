<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "id19325596_khaled1";
$password = "KhaledKhaled307307$";
$dbname = "id19325596_robotmove";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT movement FROM robotMove";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "movement: " . $row["movement"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>