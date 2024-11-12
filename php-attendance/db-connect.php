<?php 
// Hostname
$host = "localhost";
// Username
$username = "root";
// Password
$pw = "";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $username, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>
