<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$S_Name=$_GET['S_Name'];
$Login_Id=$_GET['Login_Id'];
$Password=$_GET['Password'];
$Repeat_Password=$_GET['Repeat_Password'];
$sql ="INSERT INTO Student VALUES('$S_Name','$Login_Id','$Password','$Repeat_Password')";

if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>