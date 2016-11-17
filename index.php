<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP OBJET TP</title>
</head>
<?php
try{
  define('RACINE', __DIR__);
  include_once('config/conf.php');
  include_once(INCLUDE_PATH.'connect.inc.php');
  $conn = connectionBd();
  ?>
  <body>
    <div>coucou</div>
  </body>
  <?php
}catch (Exception $ex){
  echo $ex->getMessage();
} ?>
</html>
