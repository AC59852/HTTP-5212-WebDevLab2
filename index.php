<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 1: Links and Variables</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="exercise1.php">Exercise 1</a></li>
        <li><a href="exercise2.php">Exercise 2</a></li>
      </ul>
    </nav>
  </header>
  <h1>PHP Exercise 1: Links and Variables</h1>
  <p>Use PHP echo and variables to output the
  following link information:</p>
  <hr>
  <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'https://static-assets.codecademy.com/Courses/Learn-Redux/matching-game/codecademy_logo.png';
    $linkDescription = 'Learn to code interactively, for free.';

    echo 
    "<div>
      <h2>$linkName</h2>
      <p>$linkDescription</p>
      <div>
        <img width='400' src='$linkImage' alt='$linkDescription'>
      </div>
      <a href='$linkURL' target='_blank'>Visit $linkName</a>
    </diV>";
  ?>
</body>
</html>