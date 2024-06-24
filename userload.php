<?php
$servername = "localhost";
$database = "book town";
$username = "";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if(isset($_POST['submit']))
{   
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $user = $_POST['user'];
     $city = $_POST['city'];
     $address = $_POST['address'];



// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO userprofile (firstname, lastName, user, city, address ) VALUES ($firstname,$lastname,$user,$city,$address)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>