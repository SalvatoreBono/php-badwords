<?php
/* paragrafo */
$paragraph = $_POST["paragraph"];

/*  strlen in modo da ottenere la lunghezza del paragrafo */
$paragraphLen = strlen($_POST["paragraph"]);

/* parola censurata  */
$censoredWord = $_POST["censoredWord"];

/*  str_replace (primo argomento: mettere la parola che si vuole sostituire) (secondo argomento: con quale parola sostituirla)  (terzo argomento: dove mettere la parola sostitutita)*/
$censoredParagraph = str_replace($censoredWord, "***", $paragraph);

/*  strlen  lunghezza del paragrafo censurato */
$censoredParagraphLen = strlen($censoredParagraph);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
  <div id="app">
    <div class="container pt-5">
      <div class="justify-content-center d-flex text-center">
        <div class="col-6 border border-success">
          <h1>TESTO NON CENSURATO</h1>
          <p><?php echo $paragraph . " " . $paragraphLen ?></p>
        </div>
        <div class="col-6 border border-danger">
          <h1>TESTO CENSURATO</h1>
          <p><?php echo $censoredParagraph . " " . $censoredParagraphLen ?></p>
        </div>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>