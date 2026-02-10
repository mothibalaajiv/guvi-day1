<?php
// Sample dynamic data
$matches = [
    ["team1" => "India", "team2" => "Australia", "status" => "Live", "score" => "IND 245/6 (42.3)"],
    ["team1" => "England", "team2" => "Pakistan", "status" => "Upcoming", "score" => "Starts at 7:00 PM"],
    ["team1" => "South Africa", "team2" => "New Zealand", "status" => "Completed", "score" => "SA won by 5 wickets"]
];

$news = [
    "Virat Kohli scores a brilliant century!",
    "Babar Azam returns as Pakistan captain.",
    "World Cup 2026 schedule officially announced.",
    "Young talent shines in U19 tournament."
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cricket World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        header {
            background: #0b3d91;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background: #072c66;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: yellow;
        }

        .container {
            width: 90%;
            margin: auto;
            margin-top: 20px;
        }

        .section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .match-card {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .live {
            color: red;
            font-weight: bold;
        }

        footer {
            background: #0b3d91;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }

        h2 {
            color: #0b3d91;
        }

        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>🏏 Cricket World</h1>
    <p>Your Daily Cricket Updates</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Live Scores</a>
    <a href="#">News</a>
    <a href="#">Teams</a>
    <a href="#">Schedule</a>
</nav>

<div class="container">

    <!-- Live Matches Section -->
    <div class="section">
        <h2>Live & Match Updates</h2>

        <?php foreach($matches as $match) { ?>
            <div class="match-card">
                <strong><?php echo $match['team1']; ?> vs <?php echo $match['team2']; ?></strong><br>
                Status: 
                <span class="<?php echo strtolower($match['status']) == 'live' ? 'live' : ''; ?>">
                    <?php echo $match['status']; ?>
                </span><br>
                <strong><?php echo $match['score']; ?></strong>
            </div>
        <?php } ?>

    </div>

    <!-- Latest News Section -->
    <div class="section">
        <h2>Latest Cricket News</h2>
        <ul>
            <?php foreach($news as $headline) { ?>
                <li><?php echo $headline; ?></li>
            <?php } ?>
        </ul>
    </div>

</div>

<footer>
    &copy; <?php echo date("Y"); ?> Cricket World | All Rights Reserved
</footer>

</body>
</html>
