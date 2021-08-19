<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="_css/estilo.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos</title>
</head>
<body>
  <div>
    <?php

      $num1 = $_GET["a"];
      $num2 = $_GET["b"];
      echo "<h2>Valores Recebidos: $num1 e $num2</h2>";
      echo "A soma vale " . ($num1+$num2);
      echo "<br/>A subtracao vale ". ($num1-$num2);
      echo "<br/>A multiplicacao vale ". ($num1*$num2);
      echo "<br/>A divisão vale ". ($num1/$num2);
      echo "<br/>O modulo vale ". ($num1%$num2);

      ?>
  </div>
  
</body>
</html>