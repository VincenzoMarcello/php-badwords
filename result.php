<?php
// # DICHIARIAMO DUE VARIABILI CHE CONTENGONO I VALORI INVIATI DAL FORM
$user_text = $_GET["user-text"];
$censored = $_GET["censored"];

// # TRAMITE IL REPLACE METTIAMO AL POSTO DELLA PAROLA CENSURATA TRE "*"
$result = str_replace($censored, "***", $user_text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>

<body>
  <!-- STAMPIAMO IL PARAGRAFO COSI' COM'é -->
  <h2>Il tuo paragrafo è:</h2>
  <p>
    <?= $user_text ?>
  </p>

  <!-- E LA SUA LUNGHEZZA -->
  <h2>La sua lunghezza è:</h2>
  <p>
    <?= strlen($user_text) ?>
  </p>

  <!-- STAMPIAMO IL PARAGRAFO CENSURATO -->
  <h2>Il tuo paragrafo censurato è:</h2>
  <p>
    <?php echo $result ?>
  </p>

  <!-- E LA NUOVA LUNGHEZZA -->
  <h2>La sua lunghezza ora è:</h2>
  <p>
    <?= strlen($result) ?>
  </p>
</body>

</html>