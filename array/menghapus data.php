<?php

$nama=array("apip","haliq","anggek","rezi","apis","fajar");
unset($nama[1]);
foreach($nama as $n){
    echo $n.'<br>';
}