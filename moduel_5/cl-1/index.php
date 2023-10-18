<?php
$newData = 'this is new data';
file_put_contents('./data.txt',$newData);
$fopen = file_get_contents('./data.txt');
echo nl2br($fopen);
$newData = 'this is new data';


/**
 * owner = w
 * ground =g
 * rest of the world = w
 * each file has contained above three 
 * permission has three type
 * r = 4 
 * w = 2
 * e = 1
 */
"rwxr-xr--"

rwx = owner 
r-x = group 
r-- = other