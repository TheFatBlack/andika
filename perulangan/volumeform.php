<?php

$phi=3.14;

$R= ($_GET['R']);
$T= ($_GET['T']);
$hasil= $phi * $R * $R *$T;

echo "jumlah tabung adalah $phi * $R * $R *$T=$hasil";

?>
<a href="tabung.php">back</a>