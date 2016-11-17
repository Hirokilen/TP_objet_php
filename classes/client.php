<?php
class Client{
  private $NOCLI;
  private $TITRECLIENT;
  private $NOMCLI;
  private $PRENOMCLI;
  private $ADRESSERUE1CLI;
  private $ADRESSERUE2CLI;
  private $CPCLI;
  private $VILLECLI;
  private $TELCLI;

  public function afficheUnClient(){
    return "Le client dont le numéro est égal à " . $this->NOCLI . "s'appelle " .$this->TITRECLIENT . " " .$this->NOMCLI . " " . $this->PRENOMCLI . "<br>";
  }
  public function afficheTabClient(){
    return "<tr>
     <td>".$this->NOCLI."</td>
     <td>".$this->TITRECLIENT."</td>
     <td>".$this->NOMCLI."</td>
     <td>".$this->PRENOMCLI."</td>
     <td>".$this->ADRESSERUE1CLI."</td>
     <td>".$this->ADRESSERUE2CLI."</td>
     <td>".$this->CPCLI."</td>
     <td>".$this->VILLECLI."</td>
     <td>".$this->TELCLI."</td>
     </tr>";
  }
} ?>
