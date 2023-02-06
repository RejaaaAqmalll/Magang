<?php 

$inputan = "><";
$hasil = 0;

function cekinp($inputan) {
    global $hasil;
    global $inputan;
    if ($inputan = "><"){
        $hasil = $hasil + 2;
    }
}
function loop($inputan){
    global $hasil;
    
}

cekinp($inputan);
echo "hello yang diucapkan : ". $hasil;

// echo date('H');


?>