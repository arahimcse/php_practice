<?php 

$fp = fopen("./data.txt","r");
$read = fgets($fp, 5);
echo $read;