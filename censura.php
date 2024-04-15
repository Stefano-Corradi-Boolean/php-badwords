<?php

// è true se la variabile eseiste 
// var_dump(isset($_POST['paragrafo']));

// è true se la variabile esiste ma non è vaolorizzata
// var_dump(empty($_POST['paragrafo']));

// controllo che la variabile $_POST['paragrafo'] esista e sia valorizzata 
if(isset($_POST['paragrafo']) && !empty($_POST['paragrafo'])){
  $paragrafo = $_POST['paragrafo'];
}else{
  $paragrafo = 'NESSUN DATO RICEVUTO';
}

if(isset($_POST['badword']) && !empty($_POST['badword'])){
  $badword = $_POST['badword'];
}else{
  $badword = '- NONE -';
}

$lunghezza_paragrafo = strlen($paragrafo);
$paragrafo_corretto = str_replace($badword, '***', $paragrafo);
$lunghezza_paragrafo_censurato = strlen($paragrafo_corretto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>PHP Badwords | censura</title>
</head>
<body>

<div class="container">
  <h2>Paragrafo inviato:</h2>
  <p><?php echo $paragrafo ?></p>
  <p>Lunghezzza paragrafo inviato: <?php echo $lunghezza_paragrafo ?> caratteri</p>
  <h5>Parola da cancellare: <?php echo $badword ?></h5>
  <h2>Paragrafo censurato:</h2>
  <p><?php echo $paragrafo_corretto ?></p>
  <p>Lunghezzza paragrafo censurato: <?php echo $lunghezza_paragrafo_censurato ?> caratteri</p>
</div>
  
</body>
</html>