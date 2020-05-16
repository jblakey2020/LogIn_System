<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "JustinIsAwsome$0";
$dBName = "LogInSystem";
$conn = mysqli_connect($servername, $dBUsername,$dBPassword,$dBName);

if (!$conn) {
    die("Did not connect: ".mysqli_connect_error());
    # code...
}