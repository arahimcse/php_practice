<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //receive plain text from client
    $plainText = file_get_contents("php://input");

    //convert it into array
    $arr = json_decode($plainText,true);

    //store into session
    session_start();
    $_SESSION["user"] = $arr["username"];

    echo "Session store successfully";
}

if($_SERVER["REQUEST_METHOD"]=="GET"){
    
    session_start();
    echo $_SESSION["user"];

}

if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    
    session_start();
    unset($_SESSION["user"]);
    session_destroy();
    echo "Data remove from session record";

}
?>