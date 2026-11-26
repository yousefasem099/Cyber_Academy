<?php
session_start();
require_once __DIR__ . '/config/database.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        session_regenerate_id(true);

        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
</head>
<body>

    <h2>Cyber Academy Login</h2>

    <p style="color:red;">
        <?= htmlspecialchars($error) ?>
    </p>

    <form method="POST">
        <input type="email" name="email"
               placeholder="Email" required>

        <br><br>

        <input type="password" name="password"
               placeholder="Password" required>

        <br><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>