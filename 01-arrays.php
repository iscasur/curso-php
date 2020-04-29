<?php

// Ejercicio 1 - Generar una cadena final usando el arreglo dado
$arreglo = [
  'keyStr1' => 'lado',
  0 => 'ledo',
  'keyStr2' => 'lido',
  1 => 'lodo',
  2 => 'ludo',
];

// Lado, ledo, lido, lodo, ludo,
// decirlo al revés lo dudo.
// Ludo, lodo, lido, ledo, lado,
// ¡Qué trabajo me ha costado!

// Ejercicio 2 - Crear un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach para imprimir el nombre del país seguido de las ciudades de definiste.

$country = [
  'Venezuela' => [
    "Caracas",
    "Valencia",
    "Maracaibo"
  ],
  'Mexico' => [
    "Morelia",
    "CDMX",
    "Oaxaca"
  ],
  'Colombia' => [
    "Bogota",
    "Medellin",
    "Cali"
  ],
  'Chile' => [
    "Santiago",
    "Valdivia",
    "Talca"
  ],
  'Argentina' => [
    "Buenos Aires",
    "Rosario",
    "Cordoba"
  ],
];

// Ejercicio 3 - Escribe el código neceesario para encontrar los 3 números más grandes y los 3 números más bajos de la lista.

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Ejercicios Array</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h1>Ejercicio 1</h1>
      <p>Generar una cadena final usando el arreglo dado</p>
      <p><strong>Código:</strong></p>
      <p>
        <code>
        &lt;?php <br><br>
          $arreglo = [ <br>
          &nbsp;&nbsp;'keyStr1' => 'lado', <br>
          &nbsp;&nbsp;0 => 'ledo', <br>
          &nbsp;&nbsp;'keyStr2' => 'lido', <br>
          &nbsp;&nbsp;1 => 'lodo', <br>
          &nbsp;&nbsp;2 => 'ludo', <br>
          ]; <br><br>
        
        for ($i = 0; $i < 2; $i++){ <br>
        &nbsp;&nbsp;foreach ($arreglo as $key => $value) { <br>
        &nbsp;&nbsp;&nbsp;echo $value . ", "; <br>
        &nbsp;&nbsp;} <br>
        &nbsp;&nbsp;if ($i == 0) { <br>
        &nbsp;&nbsp;&nbsp;echo '&lt;br&gt;Decirlo al revés lo dudo.&lt;br&gt;'; <br>
        &nbsp;&nbsp;} else { <br>
        &nbsp;&nbsp;&nbsp;echo '&lt;br&gt;¡Qué trabajo me ha costado!'; <br>
        &nbsp;&nbsp;}<br><br>
        &nbsp;&nbsp;$arreglo = array_reverse($arreglo);<br>
        }<br><br>
        ?&gt;
        </code>
      </p>
      <p><strong>Resultado:</strong></p>
      <p>
      <?php
      for ($i = 0; $i < 2; $i++){
        foreach ($arreglo as $key => $value) {
          echo $value . ", ";
        }
        if ($i == 0) {
          echo '<br />Decirlo al revés lo dudo.<br />';
        } else {
          echo '<br />¡Qué trabajo me ha costado!';
        }

        $arreglo = array_reverse($arreglo);
      }
      ?>
      </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <h1>Ejercicio 2</h1>
      <p>Crear un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach para imprimir el nombre del país seguido de las ciudades de definiste.</p>
      <p><strong>Código:</strong></p>
      <p>
        <code>
        &lt;?php <br><br>
        $country = [<br>
        &nbsp;&nbsp;'Venezuela' => [<br>
        &nbsp;&nbsp;&nbsp;"Caracas",<br>
        &nbsp;&nbsp;&nbsp;"Valencia",<br>
        &nbsp;&nbsp;&nbsp;"Maracaibo"<br>
        &nbsp;&nbsp;],<br>
        &nbsp;&nbsp;'Mexico' => [<br>
        &nbsp;&nbsp;&nbsp;"Morelia",<br>
        &nbsp;&nbsp;&nbsp;"CDMX",<br>
        &nbsp;&nbsp;&nbsp;"Oaxaca"<br>
        &nbsp;&nbsp;],<br>
        &nbsp;&nbsp;'Colombia' => [<br>
        &nbsp;&nbsp;&nbsp;"Bogota",<br>
        &nbsp;&nbsp;&nbsp;"Medellin",<br>
        &nbsp;&nbsp;&nbsp;"Cali"<br>
        &nbsp;&nbsp;],<br>
        &nbsp;&nbsp;'Chile' => [<br>
        &nbsp;&nbsp;&nbsp;"Santiago",<br>
        &nbsp;&nbsp;&nbsp;"Valdivia",<br>
        &nbsp;&nbsp;&nbsp;"Talca"<br>
        &nbsp;&nbsp;],<br>
        &nbsp;&nbsp;'Argentina' => [<br>
        &nbsp;&nbsp;&nbsp;"Buenos Aires",<br>
        &nbsp;&nbsp;&nbsp;"Rosario",<br>
        &nbsp;&nbsp;&nbsp;"Cordoba"<br>
        &nbsp;&nbsp;],<br>
        ];<br><br>
        foreach ($country as $key => $value){<br>
        &nbsp;&nbsp;&nbsp;echo '&lt;strong&gt;' . $key . '&lt;/strong&gt;: ';<br>
        &nbsp;&nbsp;foreach ($value as $k =&gt; $v){<br>
        &nbsp;&nbsp;&nbsp;echo $v . ' ';<br>
        &nbsp;&nbsp;}<br>
        }<br><br>
        ?&gt;
        </code>
      </p>
      <p><strong>Resultado:</strong></p>
      <p>
      <?php
        foreach ($country as $key => $value){
          echo '<strong>' . $key . '</strong>: ';
          foreach ($value as $k => $v){
            echo $v . ' ';
          }
        }
      ?>
      </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <h1>Ejercicio 3</h1>
      <p>Escribe el código neceesario para encontrar los 3 números más grandes y los 3 números más bajos de la lista.</p>
      <p>23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61</p>
      <p><strong>Código:</strong></p>
      <p>
        <code>
        &lt;?php <br><br>
        $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61]; <br><br>
        array_multisort($valores); <br><br>
        $j = count($valores) -1; <br><br>
        $mayores = "";<br>
        $menores = "";<br><br>
        for ($i = 0; $i < 3; $i++) {<br>
        &nbsp;&nbsp;$menores = $menores . " " . $valores[$i];<br>
        &nbsp;&nbsp;$mayores = $mayores . " " . $valores[$j];<br>
        &nbsp;&nbsp;$j--;<br>
        }<br><br>
        echo "Los tres números más altos son: $mayores &lt;br&gt;";<br>
        echo "Los tres números mas bajos son: $menores."<br><br>
        ?&gt;
        </code>
      </p>
      <p><strong>Resultado:</strong></p>
      <?php 
        array_multisort($valores);

        $j = count($valores) -1;

        $mayores = "";
        $menores = "";

        for ($i = 0; $i < 3; $i++) {
          $menores = $menores . " " . $valores[$i];
          $mayores = $mayores . " " . $valores[$j];
          $j--;
        }

        echo "Los tres números más altos son: $mayores <br>";
        echo "Los tres números mas bajos son: $menores."

      ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>