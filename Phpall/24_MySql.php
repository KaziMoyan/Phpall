<?php
echo "welcome to database";
echo "<br>";



$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("sorry we failed to connect :".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>