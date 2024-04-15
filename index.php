<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Badwords</title>

</head>
<body>
  <div class="container my-5">
    <h1>PHP Badwords</h1>
    <h2 id="output"></h2>
    <div class="col-6">

      <form action="censura.php" method="POST">
        <input type="text" name="badword" class="form-control mb-3" placeholder="Parola da censurare">
        <textarea name="paragrafo" class="form-control mb-3" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-primary" type="submit">invia</button>
      </form>

    </div>
  </div>
  



  <script src="js/script.js"></script>
</body>
</html>

