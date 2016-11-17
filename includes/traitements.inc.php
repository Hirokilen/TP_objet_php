<?php
function recuperationUnClient($unObjetPdo, $id){
  $sql = "select * from CLIENT where NOCLI=:pnocli";
  $ligne = $unObjetPdo->prepare($sql);
  $ligne->bindValue('pnocli',$id,PDO::PARAM_INT);
  $ligne->execute();
  $unClient = $ligne->fetch(PDO::FETCH_OBJ);
  var_dump($unClient);
  echo $unClient->NOMCLI;
}
function afficheTousClients($unObjetPdo){
  $sql = "select * from CLIENT";
  $lignes = $unObjetPdo->query($sql);
  $lignes->setFetchMode(PDO::FETCH_OBJ);
  while($unClient = $lignes->fetch()){
    echo "Numéro du client : " . $unClient->NOCLI . "Nom du client : " . $unClient->NOMCLI . " Prénom : " .$unClient->PRENOMCLI . "<br>";
  }
}
function recupUnObjetClient($unObjetPdo,$id){
  $sql = "select * from CLIENT where NOCLI=:pnocli";
  $ligne = $unObjetPdo->prepare($sql);
  $ligne->bindValue('pnocli',$id,PDO::PARAM_INT);
  $ligne->execute();
  $unClient = $ligne->fetchObject('Client');
  var_dump($unClient);
  return $unClient;
}
function afficheTousClientsObjet($unObjetPdo){
  $tableauClients = recupPlusieursObjetsClient($unObjetPdo);
  echo "<p>liste des clients <br>";
  foreach ($tableauClients as $unObjetClient){
    echo $unObjetClient->afficheUnClient() . "<br>";
    }
}
function recupPlusieursObjetsClient($unObjetPdo){
  $sql = "select * from CLIENT";
  $lignes = $unObjetPdo->query($sql);
  if ($lignes->rowCount() > 0){
    $tableauClients = $lignes->fetchAll(PDO::FETCH_CLASS, 'Client');
    return $tableauClients;
  } else {
    throw new Exception ('Aucun client trouvé');
  }
}
function tableauTousClients($unObjetPdo){
  $tableauClients = recupPlusieursObjetsClient($unObjetPdo);
  foreach ($tableauClients as $unObjetClient){
    echo $unObjetClient->afficheTabClient() . "<br>";
    }
}

?>
