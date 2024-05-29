<?php
echo " AssociativeArray";
$arr = array("ar", "mk","sk");
echo "<br>";
echo $arr[0];



$student= array("Maths"=>56, "Physics"=>70,  
                  "Chemistry"=>94, "English"=>83,  
                  "Computer"=>58);
                  foreach ($student as $subject => $marks){ 
                    echo "Student got ".$marks." in ".$subject."\n"; 
                }




?>