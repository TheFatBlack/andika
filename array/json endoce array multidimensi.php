<?php

$data=array(
    array("nama"=>"apip","nisn"=>"9876543353","kelas"=>"XI RPL 1"),
    array("nama"=>"haliq","nisn"=>"98742452","kelas"=>"XI RPL 1"),
    array("nama"=>"anggek","nisn"=>"987655423234","kelas"=>"XI RPL 1"),
    array("nama"=>"rezi","nisn"=>"9876423213","kelas"=>"XI RPL 1"),
    array("nama"=>"fajar","nisn"=>"98765231321","kelas"=>"XI RPL 1")
);

$jsonData=json_encode($data,JSON_PRETTY_PRINT);
echo "<pre>".$jsonData."</pre>";