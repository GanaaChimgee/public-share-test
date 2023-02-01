<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Challenges</title>
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/layout.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="site-header">
        <h1>Code Challenge Nr 1</h1>
        <?php include "nav.php"; ?>
      </header>
      <main>
        <h2>Aufgaben 1 - 2 (Basis)</h2>
        <p>
          Aufgabe 1: Erzeuge ein Array, dessen Elemente die Werte aus dem String $productlist enthält - mit dem Trennzeichen: "," (1 Punkt).<br>
          1. Neg Array uusgeed tuunii element-s ni string $productlist bolon "," bagtaasan huwisagch uusge!

          Aufgabe 2: Entferne zusätzlich die voranstehenden Leerzeichen der Elemente im erzeugten Array (1 Punkt).
          2. Uusgesen array-aasaa iluu hooson element-g ustga!
        </p>
        <hr>

        <?php

        $productlist = "Huawei P20 Pro, Samsung Galaxy S9 Plus, Apple iPhone 8, LG G6, Google Pixel 2";

        // Lösung hier:

           $products = explode(",", $productlist);


           $old = array(" ");
           $new = array("");  
           $products = str_replace (" ","",$products);
           var_dump($products);

        ?>
      </main>
    </div>
  </body>
</html>
