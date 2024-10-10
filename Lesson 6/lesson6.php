<?php 

/*BREDHI LESSON 5*/

echo "HAPPY NEW YEAR!";

echo "<br>";
echo "<br>";

for($i=0; $i<5;$i++){
    for ($k=15; $k>=$i ; $k--) { 
        echo "&nbsp";
    }
    for($j=0; $j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
for ($s=0; $s < 11; $s++) { 
    echo "&nbsp";
}
echo "🎁!🎁";


$employees = [
    [
        "name" => "Leart",
        "age" => 15,
        "position" => "CEO"
    ],
    [
        "name" => "Dren",
        "age" => 17,
        "position" => "CEO2"
    ],
    [
        "name" => "Blerta",
        "age" => 24,
        "position" => "CEO3"
    ]
    ];

foreach ($employees as $ceos) {
    echo "<ul>";
    echo "<li>";
    echo "Name:" .$ceos["name"];
    echo "</li>";
    echo "</ul>";
}



?>