<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>

  <?php

  $valor = isset($_GET["val"]) ? $_GET["val"]:0;
echo "o valor é $valor";

for($i = 10; $i>= 1; $i--){
  echo $i;



}




?>




  </div>
  
</body>
</html>