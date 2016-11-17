<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP OBJET TP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<?php
try{
  define('RACINE', __DIR__);
  require 'classes/autoload.php';
  AutoLoader::Register();
  include_once('config/conf.php');
  include_once(INCLUDE_CLASS.'bdd.php');
  include_once(INCLUDE_CLASS.'client.php');
  include_once(INCLUDE_PATH.'traitements.inc.php');
  $conn = Connexion::connectionBd();

  ?>
  <body>
    <div>
      <p><?php recuperationUnClient($conn, 123); ?></p>
      <p><?php afficheTousClients($conn);?> </p>
      <p><?php $unClient=recupUnObjetClient($conn,123); ?></p>
      <p><?php echo $unClient->afficheUnClient(); ?></p>
      <p><?php afficheTousClientsObjet($conn); ?></p>
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>NOCLI</th>
            <th>TITRECLIENT</th>
            <th>NOMCLI</th>
            <th>PRENOMCLI</th>
            <th>ADRESSERUE1CLI</th>
            <th>ADRESSERUE2CLI</th>
            <th>CPCLI</th>
            <th>VILLECLI</th>
            <th>TELCLI</th>
          </tr>
        </thead>
        <tbody>
          <?php tableauTousClients($conn); ?>
        </tbody>
      </table>

  </body>
  <?php
}catch (Exception $ex){
  echo $ex->getMessage();
} ?>
</html>
