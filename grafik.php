<?php

$numbers = [1,4,1,2,4,2,7,9,4,5];

echo "<h3>perulangan for</h3>";

// loop untuk cek value array  dan menentukan indeks
for ($i=0; $i <count($numbers); $i++) { 

    // menyimpan hasil looping dan indeks
    $jumlah = $numbers[$i];
    //  loop untuk menghasilkan karakter sesuai indeks dan value dalam array
    for ($x=0; $x <$jumlah; $x++) { 
        // output
        echo "#";
    }
    // jarak setiap hasil loop sesuai value
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