<?php

    $name = $_POST['name'];
    $rollno = $_POST['rollno']; 
    $math = $_POST['math'];
    $sci = $_POST['sci'];   
    $eng = $_POST['eng'];
    $total = $math + $sci + $eng;
    $avg= $total / 3;
    $per = ($total / 300) * 100;
    
    echo"<table border='1' cellpadding='10' cellspacing='0' align='center'>";
    echo "<tr><th colspan='2'>Student Report</th></tr>";
    echo "<tr><td>Name:</td> <td> $name </tr></td><br>";
    echo "<tr><td>Roll No:</td> <td> $rollno </tr></td><br>";
    echo "<tr><td>Your total marks in maths is :</td> <td> $math </tr></td><br>";
    echo "<tr><td>Your total marks in science is :</td> <td> $sci </tr></td><br>";
    echo "<tr><td>Your total marks in english is :</td> <td> $  eng </tr></td><br>";
    echo "<tr><td>Your total marks is :</td> <td> $total </tr></td><br>";
    echo "<tr><td>Your average marks is :</td> <td> $avg </tr></td><br>";
    echo "<tr><td>Your percentage is :</td> <td> $per % </tr></td><br>";
   
    echo "<tr><th colspan='2'>";
    if ($per >= 90 && $per <= 100)
         {
        $grade = "A+";
        } 
    elseif ($per >= 75 && $per < 90) 
        {
        $grade = "A";
    } 
    elseif ($per >= 65 && $per < 75) 
        {
        $grade = "B";
    }
     elseif ($per >= 55 && $per < 65) 
        {
        $grade = "C";
    }
     elseif ($per >= 45 && $per < 55) 
        {
        $grade = "D";
    } 
    else 
        {
        $grade = "Fail";
    }
    echo "You got $grade Grade";
    echo"</th></tr>";
    echo "</table>";
       
?>

        