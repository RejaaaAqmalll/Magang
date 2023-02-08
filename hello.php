<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <center>
    <form method="post">
        <h3>Pengecekan Jumlah hello</h3>
        <input type="text" placeholder="masukan inputan" name="input">
        <input type="submit" name="submit" value="Cek">
    </form>
    </center>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
$input = $_POST['input'];
// mecah string jadi array
$inputan = str_split($input, 1);
// deklarasi awal grup mardy dan total hello
$GrupMardy = 0;
$TotalHello = 0; 

// perulangan untuk cek value dan hitung total hello
foreach($inputan as $key => $value){
    // looping awal bernilai 0
    $AwalHello = 0;

    // pengecekan
    if($value == ">"){
        $GrupMardy++;
    }elseif($value == "<"){
        // menyimpan total grup
        $GrupMardy = $GrupMardy;
        // hasil ketika bertemu grup lain
        $AwalHello = $GrupMardy * 2;
    } else {
        // ulang pengecekam
        continue;
    }
    //  jumlah hello seluruhnya
    $TotalHello += $AwalHello;

    }
    echo "<p align = 'center'>Total Hello Yang Diucapkan adalah $TotalHello x</p>";
}

?>





























