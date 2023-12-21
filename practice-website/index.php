<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Page</title>
</head>
<body>
<?php
  require 'C:\Games\На всякий пожарный\Мои проекты\business card website\frontend\components\header.php';
?>
  <form action="/" method="GET">
    <input type="text" name="name" placeholder="Ваше имя"/>
    <input type="submit" value="Отправить"/>
    <h1>
      <?php echo date("d.m.y");  echo 'Hello World';?>
    </h1>
    
  </form>
</body>
</html>


