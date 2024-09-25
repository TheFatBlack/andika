<?php
function ageCount($nama,$tahun=2003){
    $umur=date("Y")-$tahun;
    echo "Hai $nama, umur kamu $umur tahun <br>";
}
ageCount("Apip",2008);
ageCount("Haliq");