<?php


#string 
#int
#float
#Boolean
#object
#Array
#null
$name = "MK";
$income = 200;
echo "$name have $income Taka ";
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";
$friends = array("rohan", "shubham", "skillf", "Larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4

// NULL
$name = NULL;
echo var_dump($name);
?>