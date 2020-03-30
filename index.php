<?php

require_once __DIR__ . '/classes/Enoteca.php';
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Bianchi.php';
require_once __DIR__ . '/traits/Informazioni.php';

// echo $VillaDora->getInfo();
// echo $LaChablisienne->getInfo();
// echo $DomaineGuyAmiotEtFils->getInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enoteca</title>
</head>

<body>
  <h1>Dettagli Vino</h1>
  <ul>
    <li style="color: purple"><span style="color: red">Specifiche:</span><br><?php echo $VillaDora->getInfo() ?></li>
    <li style="color: blue"><span style="color: red">Specifiche:</span><br><?php echo $LaChablisienne->getInfo() ?></li>
    <li style="color: orange"><span style="color: red">Specifiche:</span><br><?php echo $DomaineGuyAmiotEtFils->getInfo() ?></li>
  </ul>
</body>

</html>