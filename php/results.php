<?php
session_start();

if (!isset($_SESSION["name1"], $_SESSION["name2"], $_SESSION["name3"])) {
    header("Location: ../index.php");
    exit;
}

$scores = [
    $_SESSION["name1"] => (int) $_SESSION["points1"],
    $_SESSION["name2"] => (int) $_SESSION["points2"],
    $_SESSION["name3"] => (int) $_SESSION["points3"],
];

$highestScore = max($scores);
$winners = array_keys(array_filter($scores, static function ($score) use ($highestScore) {
    return $score === $highestScore;
}));

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <div class="gameDiv">
        <h1>Results</h1>

        <div class="results">
            <p><?php echo htmlspecialchars($_SESSION["name1"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["name1"]]; ?>
            </p>
            <p><?php echo htmlspecialchars($_SESSION["name2"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["name2"]]; ?>
            </p>
            <p><?php echo htmlspecialchars($_SESSION["name3"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["name3"]]; ?>
            </p>

            <h2>Winner: <?php echo htmlspecialchars(implode(', ', $winners), ENT_QUOTES, 'UTF-8'); ?></h2>

            <p><a href="../index.php">New Game</a></p>
        </div>
    </div>

</body>

</html>