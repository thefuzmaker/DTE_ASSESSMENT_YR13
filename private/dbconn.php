<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_grab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
$sql = "SELECT * FROM images";
 
	// SQL query to fetch data from the table
	$result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
    echo $row1["image_id"]
 

?>