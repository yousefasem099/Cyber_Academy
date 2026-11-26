<?php
require_once __DIR__ . '/config/database.php';

$name = "Test Student";
$email = "student@example.com";
$password = "Student@123";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT OR IGNORE INTO users (name, email, password)
        VALUES (:name, :email, :password)";

$stmt = $db->prepare($sql);

$stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':password' => $hashedPassword
]);

echo "Test student account created successfully!";