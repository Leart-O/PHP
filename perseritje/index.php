<?php

/*VARIABLAT*/
echo "(1.)";
echo "<br>";
$school = "Digital School";


echo "I love $school 3";
echo "<br>";

/* FUNKSIONET ARITMETIKE */
echo "<br>";
echo "(2.)";


$x = 5;
$y = 10;

echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

/* CONCENTRATE */
echo "<br>";
echo "(3.)";
echo "<br>";

$a = "Digital";
$b = "School";
$c = $a . $b;
echo "$c \n";
echo "<br>";

/* STR REPLACE */
echo "<br>";
echo "(4.)";
echo "<br>";

$programming = "Programing is not cool";
echo str_replace("not" , "very" , $programming);
echo "<br>";

/* STR WORD COUNT */
echo "<br>";
echo "(5.)";
echo "<br>";

$dig = "Digital school is a school";
echo str_word_count($dig);
echo "<br>";

/* STR LEN/LENGTH */
echo "<br>";
echo "(6.)";
echo "<br>";

$TEACHER = "Blerta Hajdini";
echo strlen($TEACHER);
echo "<br>";

/* STRREV/ REVERSE */
echo "<br>";
echo "(7.)";
echo "<br>";

$School = "Digital School";
echo strrev($School);
echo "<br>";

/* IF STATMENTS */
echo "<br>";
echo "(8.)";
echo "<br>";

$num = -5;
if($num<0){
    echo "$num is less than 0";
}
echo "<br>";

/* WHILE LOOP */
echo "<br>";
echo "(9.)";
echo "<br>";

$m = 1;
while ($m <= 5) {
    echo "The number is $m <br>";
    $m++;
}
echo "<br>";

/* DO WHILE LOOP */
echo "<br>";
echo "(10.)";
echo "<br>";

$t = 1;

do {
    echo "The number is $t <br>";
    $t++;
} while ($t <= 5);
echo "<br>";

/* FOR LOOP */
echo "<br>";
echo "(11.)";
echo "<br>";

for ($i=0; $i <= 10; $i++) { 
    echo "The number is: $i <br>";
}
echo "<br>";

/* FOR EACH */
echo "<br>";
echo "(12.)";
echo "<br>";

$cars = array("AUDI", "BMW", "TESLA");
foreach ($cars as $value) {
    echo "$value <br>";
}
echo "<br>";

?>