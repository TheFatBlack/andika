<?php
$umur=16;

if($umur>=0 && $umur <=12){
    $keterangan="Anak Anak";
}
elseif($umur>=13 && <=17){
    $keterangan="Remaja";
}
elseif($umur>=18 && <=59){
    $keterangan="Dewasa";
}
elseif($umur>=60){
    $keterangan="Lansia";
}
else{
    $keterangan="Tidak Terdaftar"
}

$kategori="$umur:$keterangan";
echo $kategori;