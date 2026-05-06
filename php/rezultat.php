<?php
session_start();

if (!isset($_SESSION["ime1"], $_SESSION["ime2"], $_SESSION["ime3"])) {
    header("Location: ../index.php");
    exit;
}

$scores = [
    $_SESSION["ime1"] => (int) $_SESSION["vsota1"],
    $_SESSION["ime2"] => (int) $_SESSION["vsota2"],
    $_SESSION["ime3"] => (int) $_SESSION["vsota3"],
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
    <title>Rezultat</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="gameDiv">
        <h1>Rezultat</h1>

        <div class="results">
            <p><?php echo htmlspecialchars($_SESSION["ime1"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["ime1"]]; ?></p>
            <p><?php echo htmlspecialchars($_SESSION["ime2"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["ime2"]]; ?></p>
            <p><?php echo htmlspecialchars($_SESSION["ime3"], ENT_QUOTES, 'UTF-8'); ?>:
                <?php echo $scores[$_SESSION["ime3"]]; ?></p>

            <h2>
                Zmagovalec:
                <?php echo htmlspecialchars(implode(', ', $winners), ENT_QUOTES, 'UTF-8'); ?>
            </h2>

            <p><a href="../index.php">Nova igra</a></p>
        </div>
    </div>

</body>

</html>