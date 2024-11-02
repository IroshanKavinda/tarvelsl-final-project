<?php
$serverName ="localhost";
$dbUsername ="lktravelers";
$dbPassword ="AZXUsS5MaD]-/gq6";
$dbName ="travelsl";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed : " .mysqli_connect_error());
} else {
    echo 'connection is successfull';
}