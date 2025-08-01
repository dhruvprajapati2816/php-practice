1  array-sum
<?php
echo"<br>";
    $a=array(10,20,30,40,50,21);
    $sum=array_sum($a);
    echo"sum of the given array is = $sum";
    echo"<br><br><br>";
?>

2  array count
<?php
echo"<br>";
    $a=array('php','c','c++','java');
    echo "total elements in array is ".count($a);
     echo"<br><br><br>";
?>


3  array_count_values
<?php
echo"<br>";
    $a=array('php','c','c++','java','java');
    $newarr=array_count_values($a);
    foreach($newarr as $key => $value)
    {
        echo"<br> $key  -    $value";
    }
     echo"<br><br><br>";
?>

4 array_product
<?php
echo"<br>";
    $a=array(10,20,30,40,50,21);
    $pro=array_product($a);
    echo"sum of the given array is = $pro";
    echo"<br><br><br>";
?>

5 array_reverse
<?php
echo"<br>";
    $a=array(10,20,30,40,50,21);
  $revarr=array_reverse($a);
  print_r($revarr);
    echo"<br><br><br>";
?>

6 in_array
<?php
echo "<br>";
    $arr = array ('php','c','c++');
    $temp = in_array('php',$arr);
    echo $temp;
    echo"<br><br><br>";
?>


7 array_rand
<?php
echo "<br>";
    $arr = array ('php','c','c++');
    $indexofarray = array_rand($arr);
    echo $arr[$indexofarray];
    echo"<br><br><br>";
?>

8- select multiple keys at random
<?php
    $arr = array('c','c++','java','android');
    $indexofarray = array_rand($arr,2);
    foreach($indexofarray as $key => $value)
    {
        echo "<br> $key  --  .$arr[$value]";
    }   
    echo"<br><br><br>";
?>


9-array_unique
<?php
echo "<br>";
$arr = array('c','c++','java');
print_r(array_unique($arr));
echo"<br><br><br>";
?>


10-array_merge
<?php
echo "<br>";
$a1 = array('c','c++','java');
$a2 = array('html','python','javascript');
echo"<prev>";
$new=array_merge(arrays: $a1,$a2);
echo"<prev>";
print_r($new);
echo"<br><br><br>";
?>


11-array_search
<?php
echo"<br>";
$my_arr = array('c','c++','android','java');
$check = array_search('android',$my_arr);
echo "$check";  //return the index of the element
echo"<br><br><br>";
?>

12-array_range
<?php
echo"<br>";     
$arr = range('a','z');
echo"<prev>";
print_r($arr);
echo"<br><br>";
?>

13-array_sort
<?php
echo"<br>";
$arr=array(10,6,8,1,30,32,23);
sort($arr);
print_r($arr);
echo"<br><br>";
?>

14-array_rsort
<?php
echo"<br>";
$arr=array(10,6,8,1,30,32,23);
rsort($arr);
print_r($arr);
echo"<br><br>";
?>


15-array_asort
<?php
echo"<br>";
$arr=array(10,6,8,1,30,32,23);
asort($arr);
print_r($arr);
echo"<br><br>";
?>

16-array_ksort
<?php
echo"<br>";
$arr = array(
    "red" => "apple",
    "yellow" => "banana",
    "green" => "kiwi");
ksort($arr);
foreach($arr as $key => $value);
{
  echo "<br> $key - $value";
}
echo"<br><br>";
?>


17-array_key_reverse_sort
<?php
echo"<br>";
$arr=array(
    "red" => "apple",
    "yellow" => "banana",
    "green" => "kiwi"
    );
krsort($arr);
foreach($arr as $key => $value);
{
  echo "<br> $key -- $value";
}
echo"<br><br>";
?>

18-shuffle
<?php
echo "<br>";
$my_arr = array('c','c++','android','java');
shuffle($my_arr);
foreach($my_arr as $key => $value) 
    {
    echo "<br> $key -- $value";
}
echo"<br><br>";
?>

19-array_key_exists
<?php
echo "<br>";
$arr=array(
    "red" => "apple",
    "yellow" => "banana",
    "green" => "kiwi"
);
echo array_key_exists("red",$arr);
echo"<br><br><br>";
?>

20-array_change_key_case
<?php
echo "<br>";
$arr=array(
    "red" => "apple",
    "yellow" => "banana",
    "green" => "kiwi"
);
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
echo "<br><br><br>";
?>

21-array_combine
<?php
echo "<br>";
$arr1 = array ('c','c++','java');
$arr2 = array ('php','python','javascript');
$newarr = array_combine($arr1,$arr2);
print_r($newarr);
echo"<br><br><br>";
?>


22-array_end
<?php
echo "<br>";
$arr = array ('c','c++','java');
echo end($arr);
echo"<br><br><br>";
?>

23-array_compact
<?php
echo "<br>";
$name = "John";
$age = 25;
$arr = compact("name", "age");
print_r($arr);
echo "<br><br><br>";
?>

24-array_flip
<?php
echo "<br>";
$arr = array('c'=>'c++','a'=>'android','p'=>'python');
$fliparray = array_flip($arr);
print_r($fliparray);
echo "<br><br><br>";
?>

25-array_diff
<?php
echo "<br>";
$arr1 = array('c','c++','java');
$arr2 = array('php','python','java');
$newarr = array_diff($arr1, $arr2);
print_r($newarr);
echo "<br><br><br>";
?>

26-array_intersect
<?php
echo "<br>";
$arr1 = array(0 => "sunday", 1 => "monday", 2 => "tuesday");
$arr2 = array(3 => "tuesday", 4 => "sunday", 5 => "friday");
$intersect = array_intersect($arr1, $arr2);
print_r($intersect);
echo "<br><br><br>";
?>

27-array_values
<?php
echo"<br>";
$arr = array  ("i"=>"c","want"=>"c++","learn"=>"java");
$myarr = array_values($arr);
foreach($myarr as $key => $value)
{
    echo "<br> $key - $value";
}
echo "<br><br><br>";
?>

28-arry_push
<?php
echo "<br>";
$arr = array ("c","c++","java");
array_push($arr,"php","javascript");
print_r($arr);
echo "<br><br><br>";
?>

29-array_pop
<?php
echo "<br>";
$arr = array ("c","c++","java");
array_pop($arr);
print_r($arr);
array_pop($arr);
print_r($arr);
echo "<br><br><br>";
?>

30-explode (string to array)
<?php
echo "<br>";
$mystring = "I want to learn php";
$arr = explode(" ", $mystring);
print_r($arr);
echo "<br><br><br>";
?>

31-implode (array to string)
<?php
echo "<br>";
$mystring =array( "I", "want", "to" ,"learn", "php");
$arr = implode(" ", $mystring);
print_r($arr);
echo "<br><br><br>";
?>