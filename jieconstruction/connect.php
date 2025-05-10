<?php 

$hostname = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jieconstruction";
$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: ");
}

?>