<?php
$host = "localhost";
$db_name = "WORKSHOP";
$username = "root";
$pass = "nurcahyo";
$conn = new mysqli($host, $username, $pass, $db_name);
/*if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/
if (!$conn) {
	echo "gagal<br>";
} /*else {
	echo "gagal<br>";
}*/
?>
