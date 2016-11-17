<?php
class Connexion{
  const STR = "mysql:host=localhost;dbname=clicom";
  const USER = "Dylan";
  const PASS = "raimon";
  static function connectionBd() {
    try{
      $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      return new PDO(self::STR,self::USER,self::PASS,$options);
    }catch (PDOExceptionException $e){
      throw new Exception("Erreur à la connexion \n". $e->getMessage());
    }
  }
}
 ?>
