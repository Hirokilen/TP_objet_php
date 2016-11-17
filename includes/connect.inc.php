<?php
function connectionBd() {
  try{
    $connect_str = "mysql:host=localhost;dbname=clicom";
    $connect_user = "root";
    $connect_pass = "";
    $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    return new PDO($connect_str,$connect_user,$connect_pass,$options);
  }catch (PDOExceptionException $e){
    throw new Exception("Erreur à la connexion \n". $e->getMessage());
  }
}
?>
