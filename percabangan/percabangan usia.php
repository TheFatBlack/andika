<?php

$usia=16;

if($usia>=0 and $usia<=12){
    $status="Anak Anak";
}elseif($usia>=13 and $usia<=17){
    $status="Remaja";
}elseif($usia>=18 and $usia<=59){
    $status="Dewasa";
}elseif($usia>=60){
    $status="Lansia";
}else{
    $status="tidak ada";
}

echo "Usia anda $usia, Anda termasuk kedalam kategori $status";