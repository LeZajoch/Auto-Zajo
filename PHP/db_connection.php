<?php
$servername = "193.85.203.188";
$username = "zajac";
$password = "DsPasswordDsPassword";
$db_name = "zajac";

$connection = sqlsrv_connect($servername, $username, $password, $db_name);

if(!$connection){
    echo "Connection Failed";
}