<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB</title>
</head>
<body>
  <h1>WEB</h1>
  <ol>
    <li><a href="index2.php?id=HTML">HTML</a></li>
    <li><a href="index2.php?id=CSS">CSS</a></li>
    <li><a href="index2.php?id=Javascript">Javascript</a></li>
  </ol>
  <h2>
    <?php
      echo $_GET['id'];
    ?>
  </h2>
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis fugiat dolor odio facilis perferendis aut deserunt nemo sed obcaecati nam totam vero atque explicabo nostrum, laudantium voluptatem eaque. Earum, unde!
</body>
</html>