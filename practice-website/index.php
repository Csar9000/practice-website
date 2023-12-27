<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Page</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<div class="grid">
  <div class="box- header"> 
  <?php require '..\practice-website\frontend\components\header.php';?>    
  </div>

  <div class="box- main"> 
  <form action="/" method="GET">
    <input type="text" name="name" placeholder="Ваше имя"/>
    <input type="submit" value="Отправить"/>
    <h1>
      <?php echo date("d.m.y");  echo '  Hello World!!!';?>
    </h1>
  </form>
  </div>
  <div class="box- menuu"> 
  <?php require('..\practice-website\frontend\components\menu.php'); ?>
  </div>
  <div class="box- footer"> 
  <?php require('..\practice-website\frontend\components\footer.php'); ?>
  </div>
</div>
</body>
</html>


