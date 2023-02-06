<?php

$numbers = [1,4,1,2,4,2,7,9,4,5];
// array();

// for ($i=0; $i <count($numbers) ; $i++) { 
//     print "#";

// }
// echo "<hr>";
// $i=0;
// foreach($numbers as $val) {
//     echo "#";
//     $i++;

// }
// echo "<br>";

echo "<h3>perulangan for</h3>";

for ($i=0; $i <count($numbers); $i++) { 
    $jumlah = $numbers[$i];

    for ($x=0; $x <$jumlah; $x++) { 
        echo "#";
    }
    echo '<br>';
}

echo "<hr>";

echo "<h3>perulangan while</h3>";
$c = 0;
while ($c <count($numbers)) {
    // echo "#";
    $total = $numbers[$c];
    $c++;
$v =0; 
while ($v < $total){
    $v++;
    echo "$";
    }
echo "<br>";
}


?>