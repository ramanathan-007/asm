<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "asm_user";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>