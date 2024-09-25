<?php
function ageCount($nama,$tahun){
    $umur=date("Y")-$tahun;
    echo "Hai $nama, umur kamu $umur tahun <br>";
}
ageCount("Apip",2008);
ageCount("Haliq",2010);