<?php
  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = 'root';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);


  if (!$conn) {
    die('Could not connect: '.mysqli_error());
  }

  echo 'Connected successfully';

  mysqli_select_db($conn, 'test');

  $query = 'SELECT * FROM posts';
  $result = mysqli_query($conn, $query);

  // print_r($result);

  print_r(mysqli_fetch_object($result));
  // var_dump($result);

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello World</title>
</head>
<body>
    <h1>Hello World</h1>

    <?php if(mysqli_num_rows($result) > 0): ?>
      <ul>
        <?php while($row = mysqli_fetch_object($result)): ?>
          <li><?php echo $row -> text; ?></li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>No Posts</p>
    <?php endif; ?>

    <!-- <?php phpinfo(); ?> -->
</body>
</html>