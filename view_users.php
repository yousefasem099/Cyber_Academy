<?php
$db = new PDO('sqlite:C:/inetpub/CyberAcademyData/cyberacademy.db');

$stmt = $db->query(
    "SELECT id, name, email, password FROM users"
);

echo "<h2>Cyber Academy - Users Database</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password Hash</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>