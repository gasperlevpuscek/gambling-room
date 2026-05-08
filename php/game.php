<?php
session_start();

if (!isset($_POST["roll"])) {
    $_SESSION["rollNumber"] = 0;
    $_SESSION["all_rolls"] = (int) $_POST["rollsNumber"];
    $_SESSION["cubeNumbers"] = (int) $_POST["cubeNumbers"];

    $_SESSION["name1"] = $_POST["name1"];
    $_SESSION["name2"] = $_POST["name2"];
    $_SESSION["name3"] = $_POST["name3"];

    $_SESSION["points1"] = 0;
    $_SESSION["points2"] = 0;
    $_SESSION["points3"] = 0;

    $_SESSION["dice1"] = array();
    $_SESSION["dice2"] = array();
    $_SESSION["dice3"] = array();
}

if (isset($_POST["roll"]) && $_SESSION["rollNumber"] < $_SESSION["all_rolls"]) {
    $_SESSION["dice1"] = array();
    $_SESSION["dice2"] = array();
    $_SESSION["dice3"] = array();

    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;

    for ($i = 0; $i < $_SESSION["cubeNumbers"]; $i++) {
        $d1 = rand(1, 6);
        $d2 = rand(1, 6);
        $d3 = rand(1, 6);

        $_SESSION["dice1"][] = $d1;
        $_SESSION["dice2"][] = $d2;
        $_SESSION["dice3"][] = $d3;

        $sum1 += $d1;
        $sum2 += $d2;
        $sum3 += $d3;
    }

    $_SESSION["points1"] += $sum1;
    $_SESSION["points2"] += $sum2;
    $_SESSION["points3"] += $sum3;

    $_SESSION["rollNumber"]++;
}

$gameFinished = $_SESSION["rollNumber"] >= $_SESSION["all_rolls"];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gamble!</title>
    <link rel="stylesheet" href="../styles/game.css">
    <link rel="icon" type="image/gif" href="..images/dice-anim.gif">
</head>

<body>
    <div class="gameDiv">

        <table>
            <tr>
                <td>
                    <?php
                    for ($i = 0; $i < $_SESSION["cubeNumbers"]; $i++) {
                        if (isset($_SESSION["dice1"][$i])) {
                            echo '<img src="../images/dice' . $_SESSION["dice1"][$i] . '.gif">';
                        } else {
                            echo '<img src="../images/dice-anim.gif">';
                        }
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for ($i = 0; $i < $_SESSION["cubeNumbers"]; $i++) {
                        if (isset($_SESSION["dice2"][$i])) {
                            echo '<img src="../images/dice' . $_SESSION["dice2"][$i] . '.gif">';
                        } else {
                            echo '<img src="../images/dice-anim.gif">';
                        }
                    }
                    ?>
                </td>

                <td>
                    <?php
                    for ($i = 0; $i < $_SESSION["cubeNumbers"]; $i++) {
                        if (isset($_SESSION["dice3"][$i])) {
                            echo '<img src="../images/dice' . $_SESSION["dice3"][$i] . '.gif">';
                        } else {
                            echo '<img src="../images/dice-anim.gif">';
                        }
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td><?php echo ($_SESSION["name1"]); ?></td>
                <td><?php echo ($_SESSION["name2"]); ?></td>
                <td><?php echo ($_SESSION["name3"]); ?></td>
            </tr>

            <tr>
                <td><?php echo $_SESSION["points1"]; ?></td>
                <td><?php echo $_SESSION["points2"]; ?></td>
                <td><?php echo $_SESSION["points3"]; ?></td>
            </tr>

            <tr>
                <td colspan="3">
                    Roll:
                    <?php echo $_SESSION["rollNumber"]; ?>
                    /
                    <?php echo $_SESSION["all_rolls"]; ?>
                </td>
            </tr>
        </table>

        <br>
        <?php if (!$gameFinished): ?>
            <form method="post">
                <button type="submit" name="roll">ROLL</button>
            </form>
        <?php else: ?>
            <form action="results.php" method="post">
                <button type="submit">RESULTS</button>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>