<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Challenges</title>
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header class="site-header">
        <h1>Code Challenge Nr 4</h1>
        <?php include "nav.php"; ?>
      </header>
      <main>
        <h2>Aufgaben 10 - 12 (Javascript)</h2>
        <p>Aufgabe 10: (1 Punkt)<br>Dem button-Element mit der ID "btnName" soll ein Click Event-Handler zugewiesen werden. </p>
        <p>Aufgabe 11: (2 Punkte)<br>Ziel ist es, dass nach dem Klick (Aufgabe 1) alle Namen aus der Datei "namen.php" mittels Javascript (AJAX) eingelesen werden.</p>
        <p>Aufgabe 12: (2 Punkte)<br>Die Namen sollen nun innerhalb des div-Elements mit der ID "output" ausgegeben werden.</p>

        <div id="wrapper">
          <button id="btnName">Hol dir alle Namen!</button>
          <div id="output"></div>
        </div>

      </main>
    </div>

    <script>
      // Lösung hier:
      document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("btnName").addEventListener("click", myFunction);
        function myFunction() {
          $.ajax({
            url      : 'namen.php',
            dataType : 'json',
            method   : 'get',
            success  : function(namen) {
              var output = document.getElementById("output");
              namen.forEach(element => output.append(element['vorname']+ ' ' +element['nachname']+', '));
            },
            error    : function(message) {
              console.log(message);
            }
          });
        }
      });

    </script>

  </body>
</html>
