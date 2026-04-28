<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="gameDiv">
    <form method="post">
      <input type="text" name="playerName1" placeholder="Enter player name 1" required>
      <input type="text" name="playerName2" placeholder="Enter player name 2" required>
      <input type="text" name="playerName3" placeholder="Enter player name 3" required>
      <button type="submit" name="gambleButton">Click me</button>
    </form>
  </div>

</body>

<?php
if (isset($_POST['gambleButton'])) {

  $name1 = $_POST['playerName1'];
  $number1 = rand(1, 6);

  $name2 = $_POST['playerName2'];
  $number2 = rand(1, 6);

  $name3 = $_POST['playerName3'];
  $number3 = rand(1, 6);

  echo "<div class='results'>";
  echo htmlspecialchars($name1) . " scored: " . $number1 . "<br>";
  echo htmlspecialchars($name2) . " scored: " . $number2 . "<br>";
  echo htmlspecialchars($name3) . " scored: " . $number3;
  echo "</div>";
}
?>

</html>