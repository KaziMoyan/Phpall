<?php
echo "MultidimonalArray";
$multiDim =  array(array(2,5,6,7),
                   array(1,3,5,4),
                   array(5,4,9,6),
);
//echo var_dump($multiDim);
echo "<br>";
for ($i=0; $i<count($multiDim);$i++){
    for($j= 0; $j<count($multiDim[$i]);$j++){
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>