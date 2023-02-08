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
$inputan = str_split($input, 1);
$GrupMardy = 0;
$TotalHello = 0; 

foreach($inputan as $key => $value){
    // looping awal bernilai 0
    $AwalHello = 0;

    // pengecekan
    if($value == ">"){
        $GrupMardy++;
    }elseif($value == "<"){
        // menyimpan total grup
        $GrupMardy = $GrupMardy;
        // hasil 
        $AwalHello = $GrupMardy * 2;
    } else {
        continue;
    }
    //  jumlah hello seluruhnya
    $TotalHello += $AwalHello;

    }
    echo "<p align = 'center'>Total Hello Yang Diucapkan adalah $TotalHello x</p>";
}

?>





























