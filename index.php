<?php
session_start();

$showResults = false;

if (isset($_POST['gambleButton'])) {
  $_SESSION['p1'] = $_POST['playerName1'];
  $_SESSION['p2'] = $_POST['playerName2'];
  $_SESSION['p3'] = $_POST['playerName3'];
  $n1 = rand(1, 6);
  $n2 = rand(1, 6);
  $n3 = rand(1, 6);

  // find highest score
  $max = max($n1, $n2, $n3);

  // determine winner
  if ($n1 == $max && $n2 == $max && $n3 == $max) {
    $winner = "It's a 3-way tie!";
  } elseif ($n1 == $max && $n2 == $max) {
    $winner = $_SESSION['p1'] . " and " . $_SESSION['p2'] . " tie!";
  } elseif ($n1 == $max && $n3 == $max) {
    $winner = $_SESSION['p1'] . " and " . $_SESSION['p3'] . " tie!";
  } elseif ($n2 == $max && $n3 == $max) {
    $winner = $_SESSION['p2'] . " and " . $_SESSION['p3'] . " tie!";
  } elseif ($n1 == $max) {
    $winner = "Winner: " . $_SESSION['p1'];
  } elseif ($n2 == $max) {
    $winner = "Winner: " . $_SESSION['p2'];
  } else {
    $winner = "Winner: " . $_SESSION['p3'];
  }

  $showResults = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="gameDiv">
    <form method="post">
      <input type="text" name="playerName1" required>
      <input type="text" name="playerName2" required>
      <input type="text" name="playerName3" required>

      <button type="submit" name="gambleButton">Roll</button>
    </form>
  </div>

  <?php if ($showResults): ?>
    <div class="results">
      <p><?php echo htmlspecialchars($_SESSION['p1']); ?> rolled: <?php echo $n1; ?></p>
      <p><?php echo htmlspecialchars($_SESSION['p2']); ?> rolled: <?php echo $n2; ?></p>
      <p><?php echo htmlspecialchars($_SESSION['p3']); ?> rolled: <?php echo $n3; ?></p>

      <h2><?php echo htmlspecialchars($winner); ?></h2>
    </div>
  <?php endif; ?>
</body>

</html>