<?php
function OpenCon()
{
$dbhost = "database-1.ccpsbdiz3ypq.us-east-1.rds.amazonaws.com"
$dbuser = "admin"
$dbpass = "CPSC336_Final!"
$dbname = "custcount"
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect Failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}
?>
