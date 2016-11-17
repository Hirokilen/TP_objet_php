<?php
function recuperationUnClient($unObjetPdo, $id){
  $sql = "select * from CLIENT where NOCLI=:pnocli";
  $ligne = $unObjetPdo->prepare($sql);
  $ligne->bindValue('pnocli',$id,PDO::PARAM_INT);
  $ligne->execute();
  $unClient = $ligne->fetch(PDO::FETCH_OBJ);
  var_dump($unClient);
} ?>
