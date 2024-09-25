<?php

function pesan(){
    echo "selamat datang di xi rpl 1";
    echo "<br>";
}

pesan();

echo "<hr>";

function tree($nama,$tahun,$jurusan){
    $umur=date("Y")-$tahun;
    echo "Saya $nama, umur $umur tahun, jurusan $jurusan <br>";
}

tree("Andika",2008,"XI RPL 1");

echo "<hr>";

function kurang($bil3,$bil4){
    return $bil3-$bil4;
}
$hasil=kurang(5,3);
echo $hasil;