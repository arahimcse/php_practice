<?php 
header("content-type:application/json");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $stringData = file_get_contents("php://input");
    
    $stringData = json_decode($stringData, true);
    print_r($stringData);
}

//let's create an object data
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //receive an plain text from a server request
    $stringData = file_get_contents("php://input");

    //convert the plain text into PHP value (Array)
    $phpAssArr = json_decode($stringData, true);

    //convert the Array into object
    $phpObj = json_encode($phpAssArr);

    //Out the object data
    print_r($phpObj);

}

?>