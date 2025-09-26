<?php

// Database connection - LIVE SERVER
$servername = "127.0.0.1";
$username = "u595626680_psinnovative";
$password = "#dJ_SRbC7iLt9u2";
$dbname = "u595626680_ps_db";

// Local development (comment out for live)
// $servername = "localhost";
// $username = "adminnuser";
// $password = "Root@2200";
// $dbname = "ps_db";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
