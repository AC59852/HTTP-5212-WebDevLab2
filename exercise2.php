<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 2: Arrays</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </nav>
  </header>
  <h1>PHP Exercise 2: Arrays</h1>
  <p>Use PHP echo and array variables to output the following link information:</p>
  <hr>
  <?php

    // an array for the linkName, linkURL, linkImage, and linkDescription
    $linkContent = [
      'linkName' => "Codecademy",
      'linkURL' => "https://www.codecademy.com/",
      'linkImage' => "https://static-assets.codecademy.com/Courses/Learn-Redux/matching-game/codecademy_logo.png",
      'linkDescription' => "Learn to code interactively, for free."
    ];

    echo 
    "<div>
      <h2>$linkContent[linkName]</h2>
      <p>$linkContent[linkDescription]</p>
      <div>
        <img width='400' src='$linkContent[linkImage]' alt='$linkContent[linkDescription]'>
      </div>
      <a href='$linkContent[linkURL]' target='_blank'>Visit $linkContent[linkName]</a>
    </diV>";
  ?>
</body>
</html>