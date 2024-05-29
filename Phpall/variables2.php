<?php
$name="Moyeen Kazi ";
function global_var(){
    global $name;
    echo "variable nside the function ".$name;
    echo "</br>";

}
global_var();
echo "Variable outside the function:".$name;
?>
<?php
$name1 = " Rahaman ";
function global_varr(){
    global $name1;
    echo "Variable inside the function :".$name1;
    echo "</br>"

}
global_varr();
echo " Variabel" 

?>