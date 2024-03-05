<?php

$serverName = "192.168.1.113,1433";
$connectionOptions = array(
    "database" => "tutorial",
    "uid" => "risda",
    "pwd" => "Gtgy1tml!",
    "TrustServerCertificate" => 1
);

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors()));
}

?>
