<?php
$courses = [
    [
        "title" => "Ethical Hacking",
        "description" => "Learn penetration testing and ethical hacking techniques.",
        "duration" => "8 Weeks",
        "price" => "$50",
        "level" => "Beginner"
    ],
    [
        "title" => "Digital Forensics",
        "description" => "Learn digital evidence collection and forensic investigation.",
        "duration" => "6 Weeks",
        "price" => "$40",
        "level" => "Intermediate"
    ],
    [
        "title" => "Application Security",
        "description" => "Learn web application security and vulnerability assessment.",
        "duration" => "10 Weeks",
        "price" => "$60",
        "level" => "Advanced"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Academy</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0b1220;
            color: white;
        }

        nav {
            background: #111c30;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: #22d3ee;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(135deg, #10233e, #0b1220);
        }

        .hero h1 {
            font-size: 42px;
            color: #22d3ee;
        }

        .hero p {
            color: #bdc8d8;
            font-size: 18px;
        }

        .courses {
            padding: 50px 8%;
        }

        .course-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .course {
            background: #17243a;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #263c58;
        }

        .course h3 {
            color: #22d3ee;
        }

        .course p {
            color: #c4cedc;
            line-height: 1.6;
        }

        .price {
            font-size: 22px;
            color: #22d3ee;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #0891b2;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #111c30;
            color: #9caec4;
        }
    </style>
</head>

<body>

<nav>
    <h2>Cyber Academy</h2>

    <div>
        <a href="index.php">Home</a>
        <a href="login.php">Student Login</a>
    </div>
</nav>

<section class="hero">
    <h1>Master Cybersecurity</h1>
    <p>Build your future in the world of cybersecurity.</p>
    <a href="#courses" class="btn">Explore Courses</a>
</section>

<section class="courses" id="courses">

    <h2>Our Courses</h2>

    <div class="course-container">

        <?php foreach ($courses as $id => $course): ?>

            <div class="course">

                <h3><?= htmlspecialchars($course["title"]) ?></h3>

                <p><?= htmlspecialchars($course["description"]) ?></p>

                <p>Duration: <?= htmlspecialchars($course["duration"]) ?></p>

                <p>Level: <?= htmlspecialchars($course["level"]) ?></p>

                <div class="price">
                    <?= htmlspecialchars($course["price"]) ?>
                </div>

                <a href="course.php?id=<?= array_search($course, $courses) ?>" class="btn">View Details</a>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<footer>
    © 2026 Cyber Academy | All Rights Reserved
</footer>

</body>
</html>