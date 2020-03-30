<?php
require_once __DIR__ . '/../classes/Enoteca.php';
require_once __DIR__ . '/../classes/Prodotto.php';

// Funzione per recuperare le informazioni del prodotto selezionato
trait Informazioni
{
  public function getInfo()
  {
    return
      'Categoria:' . $this->categoria . '<BR />' .
      'Colore:' . $this->colore . '<BR />' .
      'Tipologia:' . $this->tipologia . '<BR />' .
      'Regione:' . $this->regione . '<BR />' .
      'Nome:' . $this->nome . '<BR />' .
      'Prezzo:' . $this->prezzo . '<BR />' .
      'Voto:' . $this->voto . '<BR />' .
      'Annata:' . $this->annata . '<BR />' .
      'Alcol:' . $this->alcol . '<BR />' .
      'Formato:' . $this->formato . '<BR />';
  }
}