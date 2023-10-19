<?php

$fp = fopen('./data.txt','r');
while(!feof($fp)){
    $line = fgets($fp);
    echo $line . "<br/>";
}
