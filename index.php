<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercise 1: Links and Variables</title>
</head>
<body>
  <h1>PHP Exercise 1: Links and Variables</h1>
  <p>Use PHP echo and variables to output the
  following link information:</p>
  <hr>
  <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage =
    'https://production.cdmycdn.com/webpack/44e01805165bfde4e6e4322c540abf81.svg';
    $linkDescription = 'Learn to code interactively, for free.';

    echo '<h2>' . $linkName . '</h2>';

    echo 
    '<div>
      <a href="' . $linkURL . '">' . $linkURL . '</a>
    </diV>';

    echo '<img src="' . $linkImage . '" alt="' . $linkDescription . '">';
  ?>
</body>
</html>