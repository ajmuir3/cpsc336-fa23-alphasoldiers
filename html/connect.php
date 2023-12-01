<?php
function OpenCon()
{
$dbhost = ""
$dbuser = "admin"
$dbpass = "CPSC336_Final!"
$db = "instore"
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect Failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}
?>
