<?php
    // Associative Array initialization method 1
    //key = value
 /* 
    $a[0] = "zero";
    $a[10] = "10.50";
    $a[94] = "99";
    $a["z"]="zero";
    $a['php'] ="programming";
*/
    // Associative Array initialization method 2
  $a=array(
        1 => "one",
        10 => "10.50",
        99=> "99",  
        "z" => "zero",
        "php" => "playing with associative array"
        );

        //array calling method 1
        echo "<pre>";
        echo "php is used for " . $a['php'] . "<br>";


        //array calling method 2
        foreach($a as $value)
        {
            echo "<br>".$value ;
        }
        echo "<br>";

        //array calling method 3
        foreach($a as $key => $value)
        {
            echo "<br>key is $key and value is $value";
        }

?>