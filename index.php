<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Gambling game</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="icon" type="image/gif" href="images/dice-anim.gif">
</head>

<body>

  <div class="gameDiv">
    <img id="diceImg" src="images/dices.png" alt="dice">
    <h1>Cube Gambling Game</h1>

    <form action="php/game.php" method="post">
      <div class="names">
        <input type="text" name="name1" placeholder="Player 1" required><br><br>
        <input type="text" name="name2" placeholder="Player 2" required><br><br>
        <input type="text" name="name3" placeholder="Player 3" required><br><br>
      </div>
      <a>Dices:</a>
      <select name="cubeNumbers">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>

      <br><br>

      <a>Throws:</a>
      <select name="rollsNumber">
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


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="scripts/sweetAlert.js"></script>
</body>

</html>