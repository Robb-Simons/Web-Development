<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="news";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT id, email, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   echo "<html><head><link href="styles/browreset.css" rel="stylesheet" type="text/css"><link href="styles/main.css" rel="stylesheet" type="text/css"></head><body><table>";
	while($row = mysqli_fetch_assoc($result)) {
        
		echo "<tr><td>" . $row["id"]. "</tr></td<tr><td>" . $row["email"] . "</tr></td><tr><td> " . $row["password"] . "</tr></td>";
    }
	echo "</table></body><html>";
	
} else {
    echo "0 results";
}

mysqli_close($conn);
?>