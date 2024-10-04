<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "yandb";
$conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("Something went wrong;");
}
echo" Welcome to coding";
?>