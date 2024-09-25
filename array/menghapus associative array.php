<?php

$data=array("nama"=>"Andi",
            "nisn"=>"203789728301",
            "kelas"=>"XI RPL 1");
            
unset ($data["nisn"]);

foreach($data as $dt){
    echo $dt.'<br>';
}