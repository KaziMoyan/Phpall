<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "SELECT * FROM `phptrip` WHERE `dest`='Bihar' LIMIT 3 ";

$sql ="DELETE FROM `phptrip` WHERE `phptrip`.`sno` = 4 ";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows are : $aff<br>";

if ($result){
    echo "Deleted successfully ";
}
else{
    echo "Not delete successfully -->$err";
}

?>