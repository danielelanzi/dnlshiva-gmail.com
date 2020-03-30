<?php
require_once 'Enoteca.php';
require_once 'Prodotto.php';

///// OGGETTO 1
// Oggetto/Istanza Prodotto Enoteca
$VillaDora = new Prodotto('Falanghina','Campania','2002','13%','0,75l');
// Accesso Variabili/Attributi
// Categoria dichiarata manualmente
$VillaDora->setPrice('€' . 81.50);
$VillaDora->setVote('8/10');
$VillaDora->setWhite();
$VillaDora->setWine();
$VillaDora->nome = "Lacryma Christi del Vesuvio Bianco DOC 'Vigna del Vesuvio' 2002";
// var_dump($VillaDora);
// echo $VillaDora->getInfo();

///// OGGETTO 2
// Oggetto/Istanza Prodotto Enoteca
$LaChablisienne = new Prodotto('Chablis','Bourgogne','2013','13%','1,5l');
// Accesso Variabili/Attributi
// Categoria dichiarata manualmente
$LaChablisienne->setPrice('€' . 150);
$LaChablisienne->setVote('10/10');
$LaChablisienne->setWhite();
$LaChablisienne->setWine();
$LaChablisienne->nome = "Chablis Grand Cru 'Chateau Grenouilles' 2013";
// var_dump($LaChablisienne);

///// OGGETTO 3
// Oggetto/Istanza Prodotto Enoteca
$DomaineGuyAmiotEtFils = new Prodotto('Chardonnay','Bourgogne','2017','13,5%','0,75l');
// Accesso Variabili/Attributi
// Categoria dichiarata manualmente
$DomaineGuyAmiotEtFils->setPrice('€' . 997.5);
$DomaineGuyAmiotEtFils->setVote('8/10');
$DomaineGuyAmiotEtFils->setWhite();
$DomaineGuyAmiotEtFils->setWine();
$DomaineGuyAmiotEtFils->nome = "Le Montrachet Grand Cru 2017";
// var_dump($DomaineGuyAmiotEtFils);
