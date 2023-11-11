<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $plainText = file_get_contents("php://input");

    $phpArr = json_decode($plainText, true);

    //set cookie
    setcookie("user", $phpArr["username"], time() + 20*24*60*60,"/");

    //show message
    echo 'Set cookie successfully';
}

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo $_COOKIE["user"];
}

if($_SERVER["REQUEST_METHOD"] == "DELETE")
{
    setcookie("user","", time() - 60*60 ) ;
    echo "cookie delete from client";
}
?>