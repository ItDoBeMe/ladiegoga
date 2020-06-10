<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vremenska prognoza</title>
        <link rel="stylesheet" type="text/css" href="css.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        body {
          background: url('https://images.unsplash.com/photo-1561583534-09e822ba83ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1912&q=80');
        }

        </style>
    </head>
    <body>
<div class="container" id="cont" style="
  display: flex;
  align-items: center;
  justify-content: center;
  width:90%;">
<div class="card border-dark mb-3 p-1">
  <div class="card-body bg-light">
    <h4 class="card-title"><a>Maksimalna temperatura:</a></h4>
        <div class="card-body mx-4 mt-4 bg-light" >
<?php
require '../kontroler/maxtemp.php';
?>

<hr>
<a href="home.php" class="text-muted">Vremenska prognoza</a>
        </div>
    </div>
  </div>
</div>

    </body>
</html>
