<?php
session_start();

$players = array(
    array("name" => $_SESSION["name1"], "score" => $_SESSION["points1"]),
    array("name" => $_SESSION["name2"], "score" => $_SESSION["points2"]),
    array("name" => $_SESSION["name3"], "score" => $_SESSION["points3"])
);

usort($players, function ($a, $b) {
    return $b["score"] - $a["score"];
});

$first = $players[0];
$second = $players[1];
$third = $players[2];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" href="../styles/results.css">
    <link rel="icon" type="image/gif" href="..images/dice-anim.gif">
</head>

<body>

    <h1>Results</h1>
    <div class="podium">
         <div class="place second">
            <h2>2nd</h2>
            <p><?php echo $second["name"]; ?></p>
            <p><?php echo $second["score"]; ?> points</p>
        </div>

        <div class="place first">
            <h2>1st</h2>
            <p><?php echo $first["name"]; ?></p>
            <p><?php echo $first["score"]; ?> points</p>
        </div>

        <div class="place third">
            <h2>3rd</h2>
            <p><?php echo $third["name"]; ?></p>
            <p><?php echo $third["score"]; ?> points</p>
        </div>
    </div>

    <p>
        Redirecting to main page:
        <span id="countdown">10</span>
    </p>

    <script>
        let timeLeft = 10;

        setInterval(function () {
            timeLeft--;
            document.getElementById("countdown").innerHTML = timeLeft;

            if (timeLeft <= 0) {
                window.location.href = "../index.php";
            }
        }, 1000);
    </script>

</body>

</html>