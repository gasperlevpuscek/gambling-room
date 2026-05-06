<?php
session_start();
$_SESSION["ime1"] = $_POST["ime1"];
$_SESSION["ime2"] = $_POST["ime2"];
$_SESSION["ime3"] = $_POST["ime3"];

$_SESSION["tocke1"] = 0;
$_SESSION["tocke2"] = 0;
$_SESSION["tocke3"] = 0;



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Igra</title>
    <link rel="stylesheet" href="../styles/gameStyle.css">
</head>

<body>

    <div class="gameDiv">
        <span class="playerName"><?php echo htmlspecialchars($_SESSION["ime1"], ENT_QUOTES, 'UTF-8'); ?></span>
        <span class="playerName"><?php echo htmlspecialchars($_SESSION["ime2"], ENT_QUOTES, 'UTF-8'); ?></span>
        <span class="playerName"><?php echo htmlspecialchars($_SESSION["ime3"], ENT_QUOTES, 'UTF-8'); ?></span>


    </div>

</body>

</html>