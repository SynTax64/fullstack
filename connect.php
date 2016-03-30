<?php
$username = "preskok_si";
$password = "preskok654321_";
$database = "preskok";
$host = "192.168.56.101";
$connection = mysql_connect($host, $username, $password);

if ($connection) {
    mysql_select_db($database, $connection);

    include ("loadingData.php");
} else {
    die("Nisem povezan");
}

?>