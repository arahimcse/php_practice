<?php 
session_start();
//session unset
session_destroy();
header("location:index.php");