<?php
$dbPath = 'C:/inetpub/CyberAcademyData/cyberacademy.db';

try {
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("PRAGMA foreign_keys = ON");
} catch (PDOException $e) {
    die("Database connection failed.");
}