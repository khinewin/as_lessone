<?php 

echo  "<h1>I am h1 of html</h1>";

?>
<h1>I am second h1</h1>
<?php

$one="hello One";
$two='hello Two';

$three="Hello I am three and $one";

//Hello my name is "mg Mg"
$greeting='Hello my name is "Mg Mg"';

echo $three."i am more stirng".$greeting; //php String concat, .

$test_one="Hello I am \"test one\""; //string escape \


$test_two="Hello I am test 2";
$get_length=strlen($test_two);

echo $get_length;

$test_three=substr($test_two, 0, 6);
echo $test_three;

?>

