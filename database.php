<?php
$host = 'localhost';
$db = 'id20043684_db';
$usr = 'id20043684_user';
$pwd = 'Projectteam12#';

// parameter = hostname, username, password, database
$conn = mysqli_connect($host, $usr, $pwd, $db); //true|false

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>