<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Hello, World!</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php
      require('Bai1.php');
      $obj = new LearningPhp;
      $obj->sayHello("Vietnamese");
      $obj->sayHello("English");
      $obj->sayHello("Chinese");
      $obj->sayHello("German");
      $obj->sayHello("French");


      unset($obj);
   ?>

</body>
</html>