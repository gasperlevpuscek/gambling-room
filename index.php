<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Gambling game</title>
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>

  <div class="gameDiv">
    <h1>Roll the dice</h1>

    <form action="php/game.php" method="post">
      <input type="text" name="ime1" required><br><br>
      <input type="text" name="ime2" required><br><br>
      <input type="text" name="ime3" required><br><br>

      Dices:
      <select name="stevilo_kock">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>

      <br><br>

      Throws:
      <select name="stevilo_metov">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>

      <br><br>

      <input type="submit" value="Play">

    </form>
  </div>

</body>

</html>