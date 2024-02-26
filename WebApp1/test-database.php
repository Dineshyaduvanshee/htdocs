<?php
$connection = new mysqli('localhost', 'root', '', 'WebApp1');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
