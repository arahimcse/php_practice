<?php 

$fp = fopen("./data.txt","w");
for ($i = 0; $i < 20; $i++) {    
    fwrite($fp,"Hello World {$i}\n");
}
fclose($fp);