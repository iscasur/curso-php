<?php
// Ejercicio 1
$a = 3;
$b = 2;

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

  <title>Ejercicios Operadores</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
      <h1>Ejercicio 1</h1>
      <p>Calcula el resultado de 32 + 3 y de 3 (2 + 3). Escribe el procedimiento que empleaste.</p>
      <p>Definí dos variables (a y b), luego en el primer caso concatené el valor a y b y posteriormente lo sumé al valor de b. En el segundo caso simplemente utilicé el paréntesis para forzar el orden de la operación.</p>
      <p>
        <code>
        &lt;?php <br>
        &nbsp;$a = 3;<br>
        &nbsp;$b = 2;<br><br>
        &nbsp;$res1 = "$a$b" + $a;<br>
        &nbsp;echo "&lt;p&gt;El resultado de $a$b + $a es &lt;b&gt;$res1&lt;/b&gt;<br>
        &nbsp;$res2 = $a * ($b + $a);<br>
        &nbsp;echo "El resultado de $a ($b + $a) es &lt;b&gt;$res2&lt;/b&gt;&lt;/p&gt;<br><br>
        ?&gt;
        </code>
      </p>
      <p><b>Resultado:</b></p>
      <?php
        $res1 = "$a$b" + $a;
        echo "<p>El resultado de $a$b + $a es <b>$res1</b><br>";
        $res2 = $a * ($b + $a);
        echo "El resultado de $a ($b + $a) es <b>$res2</b></p>";
      ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <h1>Ejercicio 2</h1>
      <p>Tomando en cuenta que tenemos un variable llamada $valor, ¿Cómo sería una condicional para las siguienes opciones?</p>
      <ul>
        <li>$valor es mayor que 5 pero menor que 10</li>
        <li>$valor es mayor o igual a 0 pero menor o igual a 20</li>
        <li>$valor es igual a "10" asegurando que el tipo de dato sea cadena</li>
        <li>$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15</li>
      </ul>
      <p>$valor es mayor que 5 pero menor que 10:</p>
      <p><b>Código:</b></p>
      <p>
        <code>
        &lt;?php<br>
        $valor = 8;<br>
        if ($valor &gt; 5 && $valor &lt; 10) {<br>
        &nbsp;echo "&lt;p&gt;El $valor es mayor que 5 pero menor que 10&lt;/p&gt;";<br>
        }<br>
        ?&gt;
        </code>
      </p>
      <p><b>Resultado:</b></p>
      <?php
        $valor = 8;
        if ($valor > 5 && $valor < 10) {
          echo "<p>El $valor es mayor que 5 pero menor que 10</p>";
        }
      ?>
      <p>$valor es mayor o igual a 0 pero menor o igual a 20</p>
      <p><b>Código:</b></p>
      <p>
        <code>
        &lt;?php<br>
        $valor = 10;<br>
        if ($valor &gt;= 0 && $valor &lt;= 20){<br>
        &nbsp;echo "&lt;p&gt;$valor es mayor o igual a 0 pero menor o igual a 20&lt;/p&gt;";<br>
        }<br>
        ?&gt;
        </code>
      </p>
      <p><b>Resultado:</b></p>
      <?php
        $valor = 10;
        if ($valor >= 0 && $valor <= 20){
          echo "<p>$valor es mayor o igual a 0 pero menor o igual a 20</p>";
        }
      ?>
      <p>$valor es igual a "10" asegurando que el tipo de dato sea cadena</p>
      <p><b>Código:</b></p>
      <p>
        <code>
        &lt;?php<br>
        $valor = 10;<br>
        if($valor === '10'){<br>
        &nbsp;echo "&lt;p&gt;$valor es igual a 10 y es de tipo cadena&lt;/p&gt;";<br>
        }<br>
        ?&gt;
        </code>
      </p>
      <p><b>Resultado:</b></p>
      <?php
        $valor = 10;
        if($valor === '10'){
          echo "<p>$valor es igual a 10 y es de tipo cadena</p>";
        }
      ?>
      <p>$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15</p>
      <p><b>Código:</b></p>
      <p>
        <code>
        &lt;?php<br>
        $valor = 11;<br>
        if ($valor &gt; 0 && $valor &lt; 5 || $valor > 10 && $valor &lt; 15){<br>
        &nbsp;echo "&lt;p&gt;$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15&lt;/p&gt;";<br>
        }<br>
        ?&gt;
        </code>
      </p>
      <p><b>Resultado:</b></p>
      <?php
        $valor = 11;
        if ($valor > 0 && $valor < 5 || $valor > 10 && $valor < 15){
          echo "$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15";
        }
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