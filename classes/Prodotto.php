<?php
require_once 'Enoteca.php';
require_once __DIR__ . '/../traits/Informazioni.php';

class Prodotto extends Enoteca 
{
  // Implementazione della funzione per reperire alle informazioni dei prodotti
  use Informazioni;

  public $annata;
  public $alcol;
  public $formato;
  
  public function __construct($_tipologia, $_regione, $_annata, $_alcol, $_formato)
  {
    parent::__construct($_tipologia, $_regione);

    // possibilità di fare i controlli con if/else
    $this->tipologia = $_tipologia;
    $this->regione = $_regione;
    $this->annata = $_annata;
    $this->alcol = $_alcol;
    $this->formato = $_formato;
  }

  public function setPrice($_prezzo)
  {
    $this->prezzo = $_prezzo;
  }
  public function setVote($_voto)
  {
    $this->voto = $_voto;
  }
}

