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

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

//find records 

$num= mysqli_num_rows($result);
echo $num;
echo "<br>";

// display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //using while loop.

    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        // echo $row['sno']."Hello" .$row['name']."welcome to ".$rows['dest'];
        // echo var_dump($row);
        echo "<br>";
    }



}

?>