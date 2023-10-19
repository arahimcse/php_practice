<?php
// $newData = 'this is new data';
// file_put_contents('./data.txt',$newData);
// $fopen = file_get_contents('./data.txt');
// echo nl2br($fopen);
// $newData = 'this is new data';

// $baseName = basename('./data.txt'); // Returns trailing name component of path
// echo $baseName.'<br/>';

// $dirName = dirname(__FILE__); //Returns a parent directory's path
// echo $dirName.'hhhh';

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
// $fRead = file('./data.txt');
/**
 * Link@ https://www.php.net/manual/en/function.fopen.php
 */
$fOpen = fopen('./data.txt', 'r+');
for($i=0;$i<=10;$i++){
    echo fputs($fOpen, "Hello world{$i}\n");
}