<?php
$courses = [
    1 => [
        "title" => "Ethical Hacking",
        "description" => "Learn penetration testing and ethical hacking techniques.",
        "duration" => "8 Weeks",
        "price" => "$50",
        "level" => "Beginner",
        "topics" => [
            "Introduction to Cybersecurity",
            "Linux Fundamentals",
            "Network Scanning",
            "Penetration Testing",
            "Web Security"
        ]
    ],

    2 => [
        "title" => "Digital Forensics",
        "description" => "Learn digital evidence collection and forensic investigation.",
        "duration" => "6 Weeks",
        "price" => "$40",
        "level" => "Intermediate",
        "topics" => [
            "Digital Evidence",
            "Disk Forensics",
            "Memory Analysis",
            "Incident Investigation"
        ]
    ],

    3 => [
        "title" => "Application Security",
        "description" => "Learn web application security and vulnerability assessment.",
        "duration" => "10 Weeks",
        "price" => "$60",
        "level" => "Advanced",
        "topics" => [
            "OWASP Top 10",
            "SQL Injection",
            "Cross-Site Scripting",
            "Secure Coding",
            "Web Application Testing"
        ]
    ]
];

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$course = ($id !== false && $id !== null) ? ($courses[$id] ?? null) : null;

function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details | Cyber Academy</title>

    <style>
        body {
            margin: 0;
            background: #0b1220;
            color: white;
            font-family: Arial, sans-serif;
        }

        nav {
            padding: 20px 8%;
            background: #111c30;
        }

        nav a {
            color: #22d3ee;
            text-decoration: none;
        }

        .container {
            max-width: 850px;
            margin: 50px auto;
            padding: 30px;
            background: #17243a;
            border-radius: 12px;
        }

        h1, h2 {
            color: #22d3ee;
        }

        p, li {
            color: #c4cedc;
            line-height: 1.8;
        }

        .info {
            margin: 20px 0;
            padding: 15px;
            background: #0b1220;
            border-radius: 8px;
        }

        .btn {
            display: inline-block;
            padding: 12px 22px;
            background: #0891b2;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>

<nav>
    <a href="index.php">← Back to Home</a>
</nav>

<div class="container">

<?php if ($course): ?>

    <h1><?= e($course["title"]) ?></h1>

    <p><?= e($course["description"]) ?></p>

    <div class="info">
        <p>Duration: <?= e($course["duration"]) ?></p>
        <p>Level: <?= e($course["level"]) ?></p>
        <h2>Price: <?= e($course["price"]) ?></h2>
    </div>

    <h2>Course Topics</h2>

    <ul>
        <?php foreach ($course["topics"] as $topic): ?>
            <li><?= e($topic) ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="login.php" class="btn">Enroll Now</a>

<?php else: ?>

    <h2>Course Not Found</h2>
    <p>The requested course does not exist.</p>
    <a href="index.php" class="btn">Back Home</a>

<?php endif; ?>

</div>

</body>
</html>