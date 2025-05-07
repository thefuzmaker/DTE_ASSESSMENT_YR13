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
		// SQL query to fetch data from the table
		$sql = "SELECT * FROM images";
		$result = $conn->query($sql);
        echo $result["image_url"]
    //     if ($result->num_rows > 0) { 
    //         while($row = $result->fetch_assoc()) { 
    //           echo "id: " . $row["image_id"]. " - Name: " 
    //               . $row["image_name"]. " " . $row["image_url"]. "<br>"; 
    //         } 
    //   }  
    //   else { 
    //         echo "No records has been found"; 
    //   } 

?>