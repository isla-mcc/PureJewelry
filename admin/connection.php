<?php
try {
    $db = new PDO("mysql:dbname=test;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "FAIL";
}
?>