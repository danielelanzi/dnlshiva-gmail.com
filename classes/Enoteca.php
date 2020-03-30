<?php

// Classe Prodotti Enoteca
class Enoteca
{
  // Variabili/Attributi
  protected $categoria;
  protected $colore;
  public $tipologia;
  public $regione;
  public $nome;
  protected $prezzo;
  protected $voto;

  // Costruttore (si dichiara solo nella Classe)
  public function __construct( $_tipologia, $_regione)
  {
    // possibilità di fare i controlli con if/else
    $this->tipologia = $_tipologia;
    $this->regione = $_regione;
  }
  
  // Funzione per settare il colore del vino bianco
  public function setWhite()
  {
      return $this->colore = 'Bianco';
  }

  // Funzione per settare il colore del vino rosso
  public function setRed()
  {
      return $this->colore = 'Rosso';
  }

  // Funzione per settare la categoria = vino
  public function setWine()
  {
      return $this->categoria = 'Vino';
  }

  // Funzione per settare la categoria = spumante
  public function setSparkling()
  {
      return $this->colore = 'Spumante';
  }
}
