<?php

use function PHPSTORM_META\type;

header("content-type:application/json");

$assArray = [
    "name" => "abdur rahim",
    "age"=> "32",
    "country"=> "BD",
];
$json = json_encode($assArray);
echo $json;

//Create an multidimentional array
$assArrayM = [
    [ "name" =>"Abdur Rahim", "age"=> "32"],
    [ "name"=> "Karim", "age"=> "35"],  
];
$jmson = json_encode($assArrayM);
echo $jmson;
?>